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
            <div class="card-header">Cập Nhật Danh Mục Game</div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{route('category.index')}}" class="btn btn-success">Liệt Kê Danh Mục Game</a>
                <a href="{{route('category.create')}}" class="btn btn-success">Thêm Danh Mục Game</a>
                <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="email">Title</label>
                        <input type="text" class="form-control" id="slug" onkeyup="ChangeToSlug();" value="{{$category->title}}" name="title" placeholder="Enter Title...!">
                    </div>
                    <div class="form-group">
                        <label for="email">Slug</label>
                        <input type="text" class="form-control" id="convert_slug" value="{{$category->slug}}" name="slug" placeholder="Auto Slug...!">
                    </div>
                    <div class="form-group">
                        <label for="email">Image</label>
                        <input type="file" class="form-control-file" name="image">
                        <img src="{{asset('uploads/category/'.$category->image)}}" alt="" height="100px" width="20%">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter Desc...!">{{$category->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" name="status">
                            @if($category->status==1)
                            <option value="1" selected>Displayed</option>
                            <option value="0">Not Displayed</option>
                            @else
                            <option value="1">Displayed</option>
                            <option value="0" selected>Not Displayed</option>
                            @endif
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection