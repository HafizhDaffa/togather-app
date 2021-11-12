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
                <h3 class="card-title">Web Development</h3>
                </div>
                <div class="card-body jarak">
                <h3 class="card-title">TIM Sukses</h3>
                <p class="card-text">Proyek</p>
                <p class="card-text">Web Developmet</p>
                <a href="{{ url('/kelompok') }}" class="btn btn-primary">Buka Kelompok</a>
                </div>
                <div class="card-body jarak">
                <h3 class="card-title">TIM Hore</h3>
                <p class="card-text">Perlombaan</p>
                <p class="card-text">Web Developmet</p>
                <a href="{{ url('/kelompok') }}" class="btn btn-primary">Buka Kelompok</a>
                </div>
            </div>    
        </div>    
</div>
</section>
<!-- ini footer yaaa -->
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
