@extends('layouts.app')
@section('navbar')
<div class="container">
    @include('admin.include.navbar')
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Liệt Kê Danh Mục Game</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{route('category.create')}}" class="btn btn-success">Thêm Danh Mục Game</a>
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Tên Danh Mục</th>
                            <th>Slug Danh Mục</th>
                            <th>Mô Tả</th>
                            <th>Hiển Thị</th>
                            <th>Hình Ảnh</th>
                            <th>Quản Lý</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $key => $cate)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$cate->title}}</td>
                            <td>{{$cate->slug}}</td>
                            <td>{{$cate->description}}</td>
                            <td>
                                @if($cate->status==0)
                                Không hiển thị
                                @else
                                Hiển thị
                                @endif
                            </td>
                            <td><img src="{{asset('uploads/category/'.$cate->image)}}" alt="" height="50px" width="80%"></td>
                            <td>
                                <form action="{{route('category.destroy',[$cate->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Bạn có muốn xóa danh mục game này không?');" class="btn btn-danger">Xóa</button>
                                </form>
                                <a href="{{route('category.edit', $cate->id)}}" class="btn btn-warning">Sửa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$category->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</div>
@endsection