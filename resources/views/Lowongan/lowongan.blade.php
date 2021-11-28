@extends('Navbar.navbar')

<title>Buat Lowongan</title>
<link rel="stylesheet" href="{{ asset('css/lowongan.css') }}">
<link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
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
                            <input type="text" class="form-control" id="nama" placeholder="" name="judul">
                            @error('judul')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Jenis Kelompok</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jenis">
                                    <option value="">Pilih jenis kelompok</option>
                                    <option value="Proyek">Proyek</option>
                                    <option value="Perlombaan">Perlombaan</option>
                                </select>
                                @error('jenis')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori">
                                    <option value="">Pilih bidang keahlian</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Karya Tulis">Karya Tulis</option>
                                    <option value="Game Development">Game Development</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('kategori')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Persyaratan Pendaftaran</label>
                            <input type="text" class="form-control" id="username" placeholder="" name="persyaratan">
                            @error('persyaratan')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Anggota yang dibutuhkan</label>
                            <input type="number" class="form-control" id="username" placeholder="" name="jumlahAnggota">
                            @error('jumlahAnggota')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="text" class="form-control" id="username" placeholder="" name="linkKelompok">
                            @error('linkKelompok')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="col join">
                                <button type="submit" class="btn btn-light px-4" role="button">Submit</button>
                            </div>
                        </form>
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