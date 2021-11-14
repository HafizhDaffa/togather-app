<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/registrasi.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
    <title>Registrasi</title>
</head>
<section>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title pb-2">Registrasi</h1>
                        <h3 class="card-title">Buat akun baru</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="nama" placeholder="Masukkan Email" name="email">
                                @error('email')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                        
                            </div>
                            <div class="form-group pb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama">
                                @error('nama')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">NIM</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan NIM" name="NIM">
                                @error('NIM')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Telepon" name="telepon">
                                @error('telepon')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang Keahlian</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="keahlian">
                                    <option selected>Pilih bidang keahlian</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Karya Tulis">Karya Tulis</option>
                                    <option value="Game Development">Game Development</option>
                                    <option value="Data Mining">Data Mining</option>
                                    <option value="Keamanan Jaringan">Keamanan Jaringan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('keahlian')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kelamin">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('kelamin')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Angkatan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Angkatan" name="angkatan">
                                @error('angkatan')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Program Studi</label>                                    
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="programstudi">
                                    <option value="">Pilih program studi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                    <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
                                </select>
                                @error('programstudi')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" placeholder="Masukkan Password Baru" name="password">
                                @error('password')
                                    <div class="text-danger my-2">{{ "Silahkan isi data dengan benar" }}</div>
                                @enderror
                            </div>
                            <div class="signup pb-3">
                                <div>Sudah punya akun? <a href="{{ url('/') }}"><b>Login disini</b></a></div>
                            </div>
                            <div class="col-md-12 text-center py-3">
                                <button class="btn btn-primary btn-light px-4">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- ini footer yakk -->
    <div class="container2">
        <div class="container">
            <div class="">
                <div class="col-12 center">
                    <img src="aset/logo2.png" width="180" height="60" class="logo">
                </div>
            </div>
        </div>
    </div>
</section>