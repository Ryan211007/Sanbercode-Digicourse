@extends('layouts.master')

@section('title', 'Detail Pemain Film')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail Pemain Film</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nama:</strong> {{ $cast->name }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $cast->gender }}</p>
                <p><strong>Umur:</strong> {{ $cast->age }}</p>
                <p><strong>Biografi:</strong> {{ $cast->bio ?? '-' }}</p>
            </div>
        </div>
        <a href="{{ route('cast.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection