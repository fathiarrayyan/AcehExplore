@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $blog->title }}</h1>
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mb-4">
            <p>{!! nl2br(e($blog->content)) !!}</p>
        </div>
    </div>
</div>
@endsection
