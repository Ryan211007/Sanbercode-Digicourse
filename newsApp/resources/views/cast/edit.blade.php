@extends('layouts.master')

@section('title', 'Edit Pemain Film')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Pemain Film</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cast.update', $cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $cast->name }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male" {{ $cast->gender == 'Male' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Female" {{ $cast->gender == 'Female' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" name="age" id="age" class="form-control" value="{{ $cast->age }}" required>
            </div>
            <div class="form-group">
                <label for="bio">Biografi</label>
                <textarea name="bio" id="bio" class="form-control">{{ $cast->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection