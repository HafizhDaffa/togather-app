<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/registrasi.css') }}" rel="stylesheet">
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
                            </div>
                            <div class="form-group pb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputEmail1">NIM</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukkan NIM" name="NIM">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Nomor Telepon</label>
                                <input type="text" class="form-control" placeholder="Masukkan No Telepon" name="telepon">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Bidang Keahlian</label>
                                <input type="text" class="form-control" placeholder="Masukkan Bidang Keahlian" name="keahlian">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Jenis Kelamin</label>
                                <input type="text" class="form-control" placeholder="Masukkan Jenis Kelamin" name="kelamin">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Angkatan</label>
                                <input type="number" class="form-control" placeholder="Masukkan Angkatan" name="angkatan">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Program Studi</label>
                                <input type="text" class="form-control" placeholder="Masukkan Program Studi" name="programstudi">
                            </div>
                            <div class="form-group pb-3">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" placeholder="Masukkan Password Baru" name="password">
                            </div>
                            <div class="signup pb-3">
                                <div>Sudah punya akun? <a href="{{ url('/') }}">Login disini</a></div>
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
    @if ($errors->any())
    <div class="mb-4">
        @foreach ($errors->all() as $error)
        <div class="text-danger my-2">{{ $error }}</div>
        @endforeach
    </div>
    @endif
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