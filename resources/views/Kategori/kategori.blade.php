@extends('Navbar.navbar')

<title>Kategori</title>
<link rel="stylesheet" href="{{ asset('css/kategori.css') }}">
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Kategori</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- @php
        function filter($element, $kategori)
        {
            return $element['kategori'] == $kategori;
        }
    @endphp --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="card-title">Software Development</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Software Development'] }}</h4>
                        <a href="{{ url('/lis/' . 'Software Development') }}" class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Web Development</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Web Development'] }}</h4>
                        <a href="{{ url('/lis/' . 'Web Development') }}" class="btn btn-primary">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">UI/UX Design</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['UI/UX Design'] }}</h4>
                        <a href="{{ url('/lis/' . 'UI/UX Design') }}" class="btn btn-primary">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Karya Tulis</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Karya Tulis'] }}</h4>
                        <a href="{{ url('/lis/' . 'Karya Tulis') }}" class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Game Development</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Game Development'] }}</h4>
                        <a href="{{ url('/lis/' . 'Game Development') }}" class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Data Mining</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Data Mining'] }}</h4>
                        <a href="{{ url('/lis/' . 'Data Mining') }}"class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Keamanan Jaringan</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Keamanan Jaringan'] }}</h4>
                        <a href="{{ url('/lis/' . 'Keamanan Jaringan') }}"" class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                    <div class="card-body jarak">
                        <h3 class="card-title">Lainnya</h3>
                        <h4><br>Jumlah Kelompok : {{ $total_kategori['Lainnya'] }}</h4>
                        <a href="{{ url('/lis/' . 'Lainnya') }}" class="btn btn-primary ukuran">Buka Kategori</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ini footer yaaa -->
<div class="container2">
    <div class="container">
        <div class="row">
            <div class="col-12 center">
                <img src="aset/logo2.png" width="180" height="60" class="logo">
            </div>
        </div>
    </div>
</div>
