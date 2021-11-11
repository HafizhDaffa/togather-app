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
                        <form action="/lowongan" method="POST">
                            @csrf
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Nama Kelompok</label>
                            <input type="text" class="form-control" id="nama" placeholder="" name="judul" required='required'>
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Jenis Kelompok</label>
                                <div class="form-floating">
                                <label for="floatingSelect" class="tengah">Pilih 1 jenis</label>
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jenis" required='required'>
                                        <option selected >Pilih jenis kelompok</option>
                                        <option value="1">Proyek</option>
                                        <option value="2">Perlombaan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Bidang</label>
                            <input type="text" class="form-control" id="username" placeholder="" name="kategori" required='required'>
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Persyaratan Pendaftaran</label>
                            <input type="text" class="form-control" id="username" placeholder="" name="persyaratan" required='required'>
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Anggota yang dibutuhkan</label>
                            <input type="number" class="form-control" id="username" placeholder="" name="jumlahAnggota" required='required'>
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="text" class="form-control" id="username" placeholder="" name="linkKelompok" required='required'>
                            </div>
                            <div class="col join">
                                <button type="submit" class="btn btn-light px-4" role="button">Submit</button>
                            </div>
                        </form>
                        
                         @if ($errors->any())
                            <div class="mb-4">
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger my-2">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
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