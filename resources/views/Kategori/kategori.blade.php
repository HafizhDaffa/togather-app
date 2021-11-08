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
<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card border-0">
                <div class="card-body">
                <h3 class="card-title">Software Development</h3>
                <p class="card-text">Proyek</p>
                <a href="{{ url('/lis') }}" class="btn btn-primary ukuran">Buka Kategori</a>
                </div>
                <div class="card-body jarak">
                <h3 class="card-title">UI/UX DESIGN</h3>
                <p class="card-text">Perlombaan</p>
                <a href="{{ url('/lis') }}" class="btn btn-primary">Buka Kategori</a>
                </div>
                <div class="card-body jarak">
                <h3 class="card-title">Cyber Security</h3>
                <p class="card-text">Proyek</p>
                <a href="{{ url('/lis') }}" class="btn btn-primary">Buka Kategori</a>
                </div>
            </div>    
        </div>        
</div>
</section>
<!-- ini footer yaaa -->
<div class ="container2">
    <div class="container">
            <div class="row">
                <div class="col-12 center">
                    <img src="aset/logo2.png" width="180" height="60" class="logo">
                </div>
            </div>
        </div>
    </div>