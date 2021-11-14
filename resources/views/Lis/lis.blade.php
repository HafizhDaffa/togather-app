@extends('Navbar.navbar')

<title>Lis Kelompok</title>
<link rel="stylesheet" href="{{ asset('css/lis.css') }}">
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Lis Kelompok</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card border-0">
                    <div class="card-body batas">
                        <h3 class="card-title">{{ $kategori }}</h3>
                    </div>
                    @forelse ($daftar_kelompok as $kelompok)
                        <div class="card-body jarak">
                            <h3 class="card-title">{{ $kelompok->judul }}</h3>
                            <p class="card-text">{{ $kelompok->jenis }}</p>
                            <p class="card-text">{{ $kelompok->kategori }}</p>
                            <a href="{{ url('/kelompok/'.$kelompok->id) }}" class="btn btn-primary">Buka Kelompok</a>
                        </div>
                    @empty
                        <h3 class="text-center text-dark font-sm h3 py-4">Tidak ada  kelompok pada kategori ini</h3>
                    @endforelse
                </div>
            </div>
        </div>
</section>
<!-- ini footer yaaa -->
<!-- ini footer yaaa -->
<div class="container2">
    <div class="container">
        <div class="row">
            <div class="col-12 center">
                <img src="/aset/logo2.png" width="180" height="60" class="logo">
            </div>
        </div>
    </div>
</div>
