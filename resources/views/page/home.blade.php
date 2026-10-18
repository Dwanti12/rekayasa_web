@extends('layouts.main')

@section('title', 'Home - Prodi Sistem Informasi')

@section('content')
    <section class="hero">
        <h1>Selamat Datang</h1>

        <p>
            Ini adalah halaman utama project web profile
            Prodi SI UNPAM.
        </p>

        <a href="{{ url('/profile') }}" class="button">
            Lihat Profile
        </a>
    </section>
@endsection
