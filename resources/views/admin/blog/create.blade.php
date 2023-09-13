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
            <div class="card-header">Thêm Blog</div>

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
                <a href="{{route('blog.index')}}" class="btn btn-success">Liệt Kê Blog</a>
                <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Title</label>
                        <input type="text" class="form-control" id="slug" onkeyup="ChangeToSlug();" name="title" placeholder="Enter title...!">
                    </div>
                    <div class="form-group">
                        <label for="email">Slug</label>
                        <input type="text" class="form-control" name="slug" id="convert_slug" placeholder="Auto Slug...!">
                    </div>
                    <div class="form-group">
                        <label for="email">Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description</label>
                        <textarea class="form-control" id="desc_blog" name="description" placeholder="Enter desc...!"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Content</label>
                        <textarea class="form-control" id="content_blog" name="content" placeholder="Enter content...!"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Displayed</option>
                            <option value="0">Not Displayed</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection