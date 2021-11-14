@extends('Navbar.navbar')

<title>Edit Lowongan</title>
<link rel="stylesheet" href="{{ asset('css/lowongan.css') }}">
<link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Edit Lowongan</h1>
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
                    <form action="{{ url('/edit/' . $form_lowongan->id) }}" method="POST">
                            @csrf
                            <div class="form-group pb-3">
                            <label for="exampleInputEmail1">Nama Kelompok</label>
                            <input type="text" class="form-control" id="nama" placeholder="" value="{{ $form_lowongan->judul }}" name="judul">
                            @error('judul')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Jenis Kelompok</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"  name="jenis">
                                    <option value="">Pilih jenis kelompok</option>
                                    <option value="Proyek" {{ $form_lowongan->jenis== "Proyek"  ? 'selected = selected' : '' }}>Proyek</option>
                                    <option value="Perlombaan" {{ $form_lowongan->jenis== "Perlombaan"  ? 'selected = selected' : '' }}>Perlombaan</option>  
                                </select>
                                @error('jenis')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori">
                                    <option value="">Pilih bidang keahlian</option>
                                    <option value="Software Development" {{ $form_lowongan->kategori== "Software Development"  ? 'selected = true' : '' }}>Software Development</option>
                                    <option value="Web Developmet"{{ $form_lowongan->kategori== "Web Developmet"  ? 'selected = selected' : '' }}>Web Developmet</option>
                                    <option value="UI/UX Design"{{ $form_lowongan->kategori== "UI/UX Design"  ? 'selected = selected' : '' }}>UI/UX Design</option>
                                    <option value="Karya Tulis"{{ $form_lowongan->kategori== "Karya Tulis"  ? 'selected = selected' : '' }}>Karya Tulis</option>
                                    <option value="Game Developmet"{{ $form_lowongan->kategori== "Game Developmet"  ? 'selected = selected' : '' }}>Game Developmet</option>
                                    <option value="Data Mining"{{ $form_lowongan->kategori== "Data Mining" ? 'selected = selected' : '' }}>Data Mining</option>
                                    <option value="Keamanan Jaringan"{{ $form_lowongan->kategori== "Keamanan Jaringan" ? 'selected = selected' : '' }}>Keamanan Jaringan</option>
                                    <option value="Lainnya"{{ $form_lowongan->kategori== "Lainnya"  ? 'selected = selected' : '' }}>Lainnya</option>
                                </select>
                                @error('kategori')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Persyaratan Pendaftaran</label>
                            <input type="text" class="form-control" id="username" placeholder="" value="{{ $form_lowongan->persyaratan}}" name="persyaratan">
                            @error('persyaratan')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Anggota yang dibutuhkan</label>
                            <input type="number" class="form-control" id="username" placeholder="" value="{{ $form_lowongan->jumlahAnggota }}" name="jumlahAnggota">
                            @error('jumlahAnggota')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Link</label>
                            <input type="text" class="form-control" id="username" placeholder="" value="{{ $form_lowongan->linkKelompok }}" name="linkKelompok">
                            @error('linkKelompok')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="col join">
                                <button type="submit" class="btn btn-light px-4" role="button">Simpan</button>
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
                    <img src="/aset/logo2.png" width="180" height="60" class="logo">
                </div>
            </div>
    </div>
</div>