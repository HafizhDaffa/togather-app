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
                        <form action="/editProfil" method="POST">
                            @csrf
                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="nama" placeholder=""
                                    value="{{ $user->email }}" name="email">
                            </div>

                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->nama }}" name="nama">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">NIM</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->NIM }}" name="NIM">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Nomor Telepon Aktif</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->telepon }}" name="telepon">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang Keahlian</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->keahlian }}" name="keahlian">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->kelamin }}" name="kelamin">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Program Studi</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->programstudi }}" name="programstudi">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Angkatan</label>
                                <input type="number" class="form-control" id="username" placeholder=""
                                    value="{{ $user->angkatan }}" name="angkatan">
                            </div>
                            <div class="col join">
                                <button type="submit" class="btn btn-light px-4" role="button">Simpan</button>
                            </div>
                        </form>
                      
                      {{-- ini kode unutuk cek eror --}}
                        {{-- @if ($errors->any())
                            <div class="mb-4">
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger my-2">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ini footer yaaa -->
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
