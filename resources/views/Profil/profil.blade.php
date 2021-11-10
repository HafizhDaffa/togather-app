@extends('Navbar.navbar')

    <title>Profil</title>

    <link rel="stylesheet" href="{{ asset('css/kelompok.css') }}">
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
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                   {{$user->email}}
                                                </div>
                                            </div>
                                            <!-- <input type="text" class="form-control" id="nama" placeholder="Masukkan Email"> -->
                                            </div>
                                            <div class="form-group pb-3">
                                            <label for="exampleInputEmail1">Nama Lengkap</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->nama}}
                                                </div>
                                            </div>
                                            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama"> -->
                                            </div>
                                            <div class="form-group pb-3">
                                            <label for="exampleInputEmail1">NIM</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->NIM}}
                                                </div>
                                            </div>
                                            <!-- <input type="text" class="form-control" id="username" placeholder="Masukkan NIM"> -->
                                            </div>
                                            <div class="form-group pb-3">
                                            <label for="exampleInputPassword1">Nomor Telepon Aktif</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->telepon}}
                                                </div>
                                            </div>
                                            <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon"> -->
                                            </div>
                                            
                                            <div class="form-group pb-3">
                                            <label for="exampleInputPassword1">Bidang Keahlian</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->keahlian}}
                                                </div>
                                            </div>
                                            <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jenis Kelamin"> -->
                                            </div>
                                            <div class="form-group pb-3">
                                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->kelamin}}
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group pb-3">
                                            <label for="exampleInputPassword1">Angkatan</label>
                                            <div class="card border-0">
                                                <div class="card-body field">
                                                    {{$user->angkatan}}
                                                </div>
                                            </div>
                                            <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Angkatan"> -->
                                            </div>
                                        </form>
                                        <div class="col join">
                                            <a class="btn btn-light px-4" href="{{ url('/editProfil') }}" role="button">Edit Profil</a>
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
                        <img src="aset/logo2.png" width="180" height="60" class="logo">
                    </div>
                </div>
        </div>
    </div>

?>