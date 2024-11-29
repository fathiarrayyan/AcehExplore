@extends('adminlte::page')

@section('title', 'Destinasi Wisata')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Destinasi</h3>
        <a href="{{ route('admin.destinations.create') }}" class="btn btn-primary float-right">Tambah Destinasi</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $key => $destination)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $destination->name }}</td>
                    <td>
                        @if ($destination->image)
                            <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" width="100">
                        @endif
                    </td>
                    <td>{{ $destination->description }}</td>
                    <td>
                        <a href="{{ route('admin.destinations.edit', $destination->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.destinations.destroy', $destination->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
