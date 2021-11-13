@extends('Navbar.navbar')

<title>Edit Profil</title>
<link rel="stylesheet" href="{{ asset('css/lowongan.css') }}">
<section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center"> Edit Profil</h1>
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
                                @error('email')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->nama }}" name="nama">
                                @error('nama')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">NIM</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->NIM }}" name="NIM">
                                @error('NIM')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Nomor Telepon Aktif</label>
                                <input type="text" class="form-control" id="username" placeholder=""
                                    value="{{ $user->telepon }}" name="telepon">
                                @error('telepon')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang Keahlian</label>
                                <div class="form-floating" id="username" placeholder="">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="keahlian">
                                        <option value="">Pilih bidang keahlian</option>
                                        <option value="Software Development"
                                            {{ $user->keahlian == 'Software Development' ? 'selected = selected' : '' }}>
                                            Software Development</option>
                                        <option value="Web Developmet"
                                            {{ $user->keahlian == 'Web Developmet' ? 'selected = selected' : '' }}>
                                            Web Developmet</option>
                                        <option value="UI/UX Design"
                                            {{ $user->keahlian == 'UI/UX Design' ? 'selected = selected' : '' }}>
                                            UI/UX Design</option>
                                        <option value="Karya Tulis"
                                            {{ $user->keahlian == 'Karya Tulis' ? 'selected = selected' : '' }}>
                                            Karya Tulis</option>
                                        <option value="Game Developmet"
                                            {{ $user->keahlian == 'Game Developmet' ? 'selected = selected' : '' }}>
                                            Game Developmet</option>
                                        <option value="Data Mining"
                                            {{ $user->keahlian == 'Data Mining' ? 'selected = selected' : '' }}>
                                            Data Mining</option>
                                        <option value="Keamanan Jaringan"
                                            {{ $user->keahlian == 'Keamanan Jaringan' ? 'selected = selected' : '' }}>
                                            Keamanan Jaringan</option>
                                        <option value="Lainnya"
                                            {{ $user->keahlian == 'Lainnya' ? 'selected = selected' : '' }}>
                                            Lainnya
                                        </option>
                                    </select>
                                    <label class="tengah" for="floatingSelect">Pilih salah satu bidang</label>
                                </div>
                                @error('keahlian')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <div class="form-floating" id="username" placeholder="">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="kelamin">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"
                                            {{ $user->kelamin == 'Laki-laki' ? 'selected = true' : '' }}>Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ $user->kelamin == 'Perempuan' ? 'selected = selected' : '' }}>
                                            Perempuan</option>

                                    </select>
                                    <label class="tengah" for="floatingSelect">Pilih Jenis Kelamin</label>
                                </div>
                                @error('kelamin')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Program Studi</label>
                                <div class="form-floating" id="username" placeholder="">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="programstudi">
                                        <option value="">Pilih Program Studi</option>
                                        <option value="Teknik Informatika"
                                            {{ $user->programstudi == 'Teknik Informatika' ? 'selected = true' : '' }}>
                                            Teknik Informatika</option>
                                        <option value="Teknik Komputer"
                                            {{ $user->programstudi == 'Teknik Komputer' ? 'selected = selected' : '' }}>
                                            Teknik Komputer</option>
                                        <option value="Sistem Informasi"
                                            {{ $user->programstudi == 'Sistem Informasi' ? 'selected = selected' : '' }}>
                                            Sistem Informasi</option>
                                        <option value="Teknologi Informasi"
                                            {{ $user->programstudi == 'Teknologi Informasi' ? 'selected = selected' : '' }}>
                                            Teknologi Informasi</option>
                                        <option value="Pendidikan Teknologi Informasi"
                                            {{ $user->programstudi == 'Pendidikan Teknologi Informasi' ? 'selected = selected' : '' }}>
                                            Pendidikan Teknologi Informasi</option>

                                    </select>
                                    <label class="tengah" for="floatingSelect">Pilih salah satu Program
                                        Studi</label>
                                </div>
                                @error('programstudi')
                                    <div class="text-danger my-2">{{ 'Silahkan isi data dengan benar' }}</div>
                                @enderror
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
