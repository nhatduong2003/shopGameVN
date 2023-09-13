<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|unique:categories|max:255',
                'slug' => 'required|unique:categories|max:255',
                'description' => 'required|max:255',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100, min_height=100,max_width=2000,max_height=2000',
                'content' => 'required',
                'status' => 'required',
            ],
            [
                'title.unique' => 'Tên blog game đã có, xin vui lòng điền tên khác!',
                'title.required' => 'Tên blog game phải có',
                'slug.unique' => 'Tên slug blog game đã có, xin vui lòng điền tên khác!',
                'slug.required' => 'Tên slug blog game phải có',
                'image.required' => 'Hình ảnh phải có',
                'description.required' => 'Mô tả blog game phải có',
                'content.required' => 'Content blog game phải có',
            ]
        );
        $blog = new Blog();
        $blog->title = $data['title'];
        $blog->slug = $data['slug'];
        $blog->description = $data['description'];
        $blog->content = $data['content'];
        $blog->status = $data['status'];
        // Thêm hình ảnh vào folder
        $get_image = $request->image;
        $path = 'uploads/blog/';
        $get_name_image = $get_image->getClientOriginalName(); //hinh123.png -> Name Image
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $blog->image = $new_image;
        $blog->save();
        return redirect()->route('blog.index')->with('status', 'Thêm danh mục thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100, min_height=100,max_width=2000,max_height=2000',
                'status' => 'required',
                'content' => 'required',
            ],
            [
                'title.required' => 'Tên blog game phải có',
                'description.required' => 'Mô tả blog game phải có',
                'content.required' => 'Mô tả blog game phải có',
            ]
        );
        $blog = Blog::find($id);
        $blog->title = $data['title'];

        $blog->description = $data['description'];
        $blog->status = $data['status'];
        // Thêm hình ảnh vào folder
        $get_image = $request->image;
        if ($get_image) {
            // Bỏ hình ảnh
            $path_unlink = 'uploads/blog/' . $blog->image;
            if (file_exists($path_unlink)) {
                unlink($path_unlink);
            }
            // Thêm mới hình ảnh
            $path = 'uploads/blog/';
            $get_name_image = $get_image->getClientOriginalName(); //hinh123.png -> Name Image
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $blog->image = $new_image;
        }
        $blog->save();
        return redirect()->back()->with('status', 'Cập nhật blog mới thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        // Bỏ hình ảnh
        $path_unlink = 'uploads/blog/' . $blog->image;
        if (file_exists($path_unlink)) {
            unlink($path_unlink);
        }
        $blog->delete();
        return redirect()->back();
    }
}
