<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<section>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title pb-2">LOGIN</h1>
                        <h3 class="card-title">Selamat Datang di TO-GATHER</h3>
                        <form method="POST" action="/">
                            @csrf
                            <div class="form-group py-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                @error('email')
                                    <div class="text-danger my-2">{{ 'silahkan mengisi email dan password anda' }}</div>
                                @enderror
                            </div>

                            <div class="form-group pb-1">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="password">
                                @error('password')
                                    <div class="text-danger my-2">{{ 'silahkan mengisi email dan password anda' }}</div>
                                @enderror
                            </div>
                            <div class="signup pb-3">
                                <div> <br><br>Belum mempunyai akun? <a href="{{ url('/register') }}"> <b>Daftar disini</b></a>
                                </div>
                            </div>
                            <div class="col-md-12 text-center py-3">
                                <button type="submit" class="btn btn-primary btn-light px-4 jarak"
                                    role="button">Masuk</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ini footer yakk -->
<div class="container2">
    <div class="container">
        <div class="">
            <div class="col-12">
                <img src="aset/logo2.png" width="180" height="60" class="logo">
            </div>
        </div>
    </div>
</div>
