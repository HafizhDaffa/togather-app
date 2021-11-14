@extends('Navbar.navbar')

<title>Kelompok</title>
<link rel="stylesheet" href="{{ asset('css/kelompok.css') }}">
<link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
<section class="py-5 container-fluid">
<div class="container jarak2">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card border-0">
                <div class="card-body batas">
                <h3 class="card-title">{{$kelompok->kategori}}</h3>
                <p class="card-text">{{$kelompok->jenis}}</p>
                <h4 class="card-text">{{$kelompok->judul}}</h4>
                </div>
                
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-8">
                            <div class="card border-0">
                                <div class="card-body jarak "> 
                                    <form>
                                        <div class="form-group pb-3">
                                        <label for="exampleInputEmail1">Nama Kelompok</label>
                                        <div class="card border-0">
                                            <div class="card-body field">
                                                {{$kelompok->judul}}
                                            </div>
                                        </div>
                                        <!-- <input type="text" class="form-control" id="nama" placeholder="Masukkan Email"> -->
                                        </div>
                                        <div class="form-group pb-3">
                                        <label for="exampleInputEmail1">Jenis Kelompok</label>
                                        <div class="card border-0">
                                            <div class="card-body field">
                                                {{$kelompok->jenis}}
                                            </div>
                                        </div>
                                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama"> -->
                                        </div>
                                        <div class="form-group pb-3">
                                        <label for="exampleInputEmail1">Bidang</label>
                                        <div class="card border-0">
                                            <div class="card-body field">
                                                {{$kelompok->kategori}}
                                            </div>
                                        </div>
                                        <!-- <input type="text" class="form-control" id="username" placeholder="Masukkan NIM"> -->
                                        </div>
                                        <div class="form-group pb-3">
                                        <label for="exampleInputPassword1">Persyaratan Pendaftaran</label>
                                        <div class="card border-0">
                                            <div class="card-body field">
                                                {{$kelompok->persyaratan}}
                                            </div>
                                        </div>
                                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon"> -->
                                        </div>
                                        
                                        <div class="form-group pb-3">
                                        <label for="exampleInputPassword1">Anggota yang dibutuhkan</label>
                                        <div class="card border-0">
                                            <div class="card-body field">
                                                {{$kelompok->jumlahAnggota}} orang
                                            </div>
                                        </div>
                                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jenis Kelamin"> -->
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
                                        <a target="_blank" class="btn btn-light px-4" type="button" href={{str_starts_with($kelompok->linkKelompok, "https")? $kelompok->linkKelompok:"https://".$kelompok->linkKelompok}}>Join</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <img src="/aset/logo2.png" width="180" height="60" class="logo">
                </div>
            </div>
    </div>
</div>