@extends('Navbar.navbar')

<title>Buat Lowongan</title>
<link rel="stylesheet" href="{{ asset('css/lowongan.css') }}">
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
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card border-0">
                    <div class="card-body jarak "> 
                        <form>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Nama Kelompok</label>
                            <input type="text" class="form-control" id="nama" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Jenis Kelompok</label>
                                <div class="form-floating">
                                <label for="floatingSelect" class="tengah">Pilih 1 jenis</label>
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                        <option selected >Pilih jenis kelompok</option>
                                        <option value="1">Proyek</option>
                                        <option value="2">Perlombaan</option>
                                    </select>
                                </div>
                            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama"> -->
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Bidang</label>
                            <input type="text" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Persyaratan Pendaftaran</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Anggota yang dibutuhkan</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="password" class="form-control" id="username" placeholder="">
                            </div>
                            <!-- <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Program Studi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Program Studi">
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Password Baru</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Baru">
                            </div> -->  
                        </form>
                        
                        <div class="col join">
                            <a class="btn btn-light px-4" href="{{ url('/lowongan2') }}" role="button">Submit</a>
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