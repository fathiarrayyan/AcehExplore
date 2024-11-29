@extends('adminlte::page')

@section('title', 'Blogs')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $blogs->links() }}
</div>
@endsection
