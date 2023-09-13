@extends('layouts.app')
@section('navbar')
<div class="container">
    @include('admin.include.navbar')
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Liệt Kê Blog</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{route('blog.create')}}" class="btn btn-success">Thêm Blog</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Blog</th>
                            <th>Mô Tả</th>
                            <th>Hiển Thị</th>
                            <th>Hình Ảnh</th>
                            <th>Quản Lý</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $blog)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{!!$blog->description!!}</td>
                            <td>
                                @if($blog->status==0)
                                Không hiển thị
                                @else
                                Hiển thị
                                @endif
                            </td>
                            <td><img src="{{asset('uploads/blog/'.$blog->image)}}" alt="" height="50px" width="80%"></td>
                            <td>
                                <form action="{{route('blog.destroy',[$blog->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa blog này không?');" class="btn btn-danger">Xóa</button>
                                </form>
                                <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$blogs->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</div>
@endsection