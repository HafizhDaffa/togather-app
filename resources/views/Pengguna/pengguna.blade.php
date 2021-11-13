@extends('Navbar.navbar')

    <title>Daftar Pengguna</title>

    <link rel="stylesheet" href="{{ asset('css/lowongan2.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('/aset/logo.png') }}" />
    <section class="py-5 container-fluid">
    <div class="row">
        <div class="header">
            <h1 class="text-center">Daftar Pengguna</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12 p-5">

        <div class="col-md-4 bawah">
            <form action="/search" method="get">
                <div class="input-group custom-search-form">
                    <input style ="font-size: 15pt" type="search" name="search" class="form-control" placeholder="search here...">
                    <span class="input-group-btn">
                        <button style ="font-size: 15pt" type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>

        <?php foreach ($user as $user) : ?>
                <div class="card border-0">
                    <div class="card-body">
                    <h3 class="card-title"><?php echo  $user->nama ?> (<?php echo  $user->programstudi ?>)</h3>
                    <p class="card-text">Jenis Kelamin : <?php echo  $user->kelamin ?></p>
                    <p class="card-text">No telepon : <?php echo  $user->telepon ?></p>
                    <p class="card-text">Bidang Keahlian : <?php echo  $user->keahlian ?></p>
                    </div>
                </div>
            <br>
            <?php endforeach ?>
            </div>

        </div>

    </section>
    <!-- ini footer yaaa -->
    <div class ="container2">
        <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <img src="aset/logo2.png" width="180" height="60" class="logo">
                    </div>
                </div>
        </div>
    </div>
