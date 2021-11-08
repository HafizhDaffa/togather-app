@extends('Navbar.navbar')

<title>Edit Profil</title>
<link rel="stylesheet" href="{{ asset('css/lowongan.css') }}">
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Profil</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card border-0">
                    <div class="card-body jarak "> 
                        <form>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="nama" placeholder="">
                            </div>
                            
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">NIM</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Nomor Telepon Aktif</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Bidang Keahlian</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Angkatan</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                        </form>
                        
                        <div class="col join">
                            <a class="btn btn-light px-4" href="{{ url('/profil') }}" role="button">Simpan</a>
                        </div>
                    </div>
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