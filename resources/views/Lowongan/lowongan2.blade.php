@extends('Navbar.navbar')

<title>Buat Lowongan</title>
<link rel="stylesheet" href="{{ asset('css/lowongan2.css') }}">
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Buat Lowongan</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <?php foreach ($lowongan as $lowongan) : ?>
                <div class="card border-0">
                    <div class="card-body">
                    <h3 class="card-title"><?php echo  $lowongan->judul ?></h3>
                    <p class="card-text"><?php echo  $lowongan->jenis?></p>
                    <a href="/hapuslowongan/{{ $lowongan->id }}" class="btn btn-primary ukuran">Hapus Kategori</a>
                    <a href="{{ url('/edit/' . $lowongan->id) }}" class="btn btn-primary ukuran ukuranedit">Edit Kategori</a>
                    </div>
                </div>
            <br>
            <?php endforeach ?>
            <div class="card border-0">
                <div class="card-body jarak ">
                <a href="{{ url('/lowongan') }}" class="btn btn-primary center">Buat Lowongan Baru</a>
                </div>
            </div>  
        </div>             
</div></div>
</section>

<!-- ini footer yaaa -->
<div class ="container2">
    <div class="container">
            <div class="row">
                <div class="col-12 center2">
                    <img src="aset/logo2.png" width="180" height="60" class="logo">
                </div>
            </div>
    </div>
</div>