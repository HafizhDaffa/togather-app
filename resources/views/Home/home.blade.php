@extends('Navbar.navbar')

<title>Home</title>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
<section class="py-5 container">
   
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="judul">TO-GATHER</div> <br> <h4> Sistem pencari teman kelompok berbasis website. Dengan To-gather mahasiswa akan
                    mendapatkan kemudahan dalam mencari sebuah tim dalam melakukan sebuah proyek atau lomba yang akan diikuti nantinya. </h4>
            </div>

            <div class="col-6">
                <img src="aset/onboard.svg" alt="" width="688" height="450" class="d-inline-block align-text-top">
            </div>  
        </div> 

        <div class="row">
            <div class="col-12">
                <div class="judul2">Fitur-Fitur TO-GATHER</div>
            </div>
            <div class="col-md-4 p-4">
                <div class="card">
                <img src="aset/kategori.svg" alt="" width="300" height="200" class="d-inline-block align-text-top gambar center">
                    <div class="card-body">
                    <h5 class="card-title">Kategori</h5>
                    <p class="card-text"> Terdapat beberapa kategori yang telah disediakan, anda dapat mencari kelompok sesuai dengan minat.</p>
                    <div class="col-md-12 text-center py-3">
                                <a class="btn px-4 border-0" href="{{ url('/kategori') }}" role="button">Kategori</a>
                            </div>
                    </div>
                </div>    
            </div>    
            <div class="col-md-4 p-4">
                <div class="card">
                <img src="aset/lowongan.svg" alt="" width="300" height="200" class="d-inline-block align-text-top gambar center">
                    <div class="card-body">
                    <h5 class="card-title">Buat Lowongan</h5>
                    <p class="card-text"> Buatlah kelompok dengan membuka lowongan untuk mencari anggota kelompok yang kalian inginkan.</p>
                    <div class="col-md-12 text-center py-3">
                                <a class="btn px-4 border-0" href="{{ url('/cabanglowongan') }}" role="button">Buat Lowongan</a>
                            </div>
                    </div>
                </div>    
            </div>    
            <div class="col-md-4 p-4">
                <div class="card">
                <img src="aset/home.svg" alt="" width="300" height="200" class="d-inline-block align-text-top gambar center">
                    <div class="card-body">
                    <h5 class="card-title">Profil</h5>
                    <p class="card-text">Isi data profil dengan benar agar data akun anda tervalidasi dan dapat dilihat oleh anggota lain.</p>
                         <div class="col-md-12 text-center py-3">
                                <a class="btn px-4 border-0" href="{{ url('/profil') }}" role="button">Profil</a>
                            </div>
                    </div>
                </div>    
            </div>                     
        </div>

        <div class="row">
            <div class="col-6">
                <img src="aset/kelompok.jpg" alt="" width="620" height="400" class="d-inline-block align-text-top">
            </div>
            <div class="col-6">
                <h5 class = "judul3"> 
                    To-gather adalah sebuah website yang dapat digunakan oleh Mahasiswa FILKOM  UB untuk mengunggah informasi terkati ketersediaan lowongan 
                    anggota pada suatu kelompok. To-gather berisikan lowongan kelompok yang tersedia, persyaratan kelompok, dan kontak yang dapat dihubungi
                    untuk bergabung bersama kelompok yang sesuai dengan bidang keminatan mahasiswa. </h5>
            </div>
        </div> 
    </div> 
</section>
<!-- ini footer yaaa -->
<div class ="container2">
    <div class="container">
        <div class="col-12">
            <img src="aset/logo2.png" width="180" height="60" class="logo">
        </div>
    </div>
</div>

