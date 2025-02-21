@extends('layouts.master')

@section('title', 'Tambah Pemain Film')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Pemain Film</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cast.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male">Laki-laki</option>
                    <option value="Female">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="bio">Biografi</label>
                <textarea name="bio" id="bio" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection