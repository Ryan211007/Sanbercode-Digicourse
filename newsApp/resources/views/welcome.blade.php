@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
        <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>

        <h3>Detail Anda:</h3>
        <p><strong>Nama Depan:</strong> {{ $firstName }}</p>
        <p><strong>Nama Belakang:</strong> {{ $lastName }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $gender }}</p>
        <p><strong>Kewarganegaraan:</strong> {{ $nationality }}</p>
        <p><strong>Bahasa yang Dikuasai:</strong> 
            @if(is_array($languages))
                {{ implode(', ', $languages) }}
            @else
                Tidak ada bahasa dipilih
            @endif
        </p>
        <p><strong>Bio:</strong> {{ $bio }}</p>
    </div>
</div>
@endsection