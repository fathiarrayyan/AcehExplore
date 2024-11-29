@extends('adminlte::page')

@section('title', 'Edit Destination')

@section('content')
<div class="container">
    <h1>Edit Destination</h1>
    <form action="{{ route('admin.destinations.update', $destination) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $destination->name) }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $destination->description) }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            @if ($destination->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" width="200">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control-file">
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.destinations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
