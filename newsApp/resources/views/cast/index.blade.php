@extends('layouts.master')

@section('title', 'Daftar Pemain Film')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pemain Film</h3>
        <a href="{{ route('cast.create') }}" class="btn btn-primary float-right">Tambah Pemain Film</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($casts as $cast)
                <tr>
                    <td>{{ $cast->id }}</td>
                    <td>{{ $cast->name }}</td>
                    <td>{{ $cast->gender }}</td>
                    <td>{{ $cast->age }}</td>
                    <td>
                        <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection