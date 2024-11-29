@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content')
<div class="container">
    <h1>Edit Blog</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required>{{ old('content', $blog->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            @if ($blog->image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="200">
            </div>
            @endif
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection