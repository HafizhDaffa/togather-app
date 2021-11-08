<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Login.login');
});

Route::get('/login', function () {
    return view('Login.login');
});
Route::get('/registrasi', function () {
    return view('Registrasi.registrasi');
});
Route::get('/navbar', function () {
    return view('Navbar.navbar');
});
Route::get('/kategori', function () {
    return view('Kategori.kategori');
});
Route::get('/home', function () {
    return view('Home.home');
});
Route::get('/lis', function () {
    return view('Lis.lis');
});
Route::get('/kelompok', function () {
    return view('Kelompok.kelompok');
});
Route::get('/lowongan', function () {
    return view('Lowongan.lowongan');
});
Route::get('/lowongan2', function () {
    return view('Lowongan.lowongan2');
});
Route::get('/edit', function () {
    return view('Lowongan.edit');
});
Route::get('/profil', function () {
    return view('Profil.profil');
});
Route::get('/editProfil', function () {
    return view('Profil.editProfil');
});



