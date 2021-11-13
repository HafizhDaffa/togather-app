<?php

use App\Http\Controllers\lowonganController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use App\Http\Controllers\profilController;
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

Route::get('/navbar', function () {
    return view('Navbar.navbar');
});
Route::get('/kategori', function () {
    return view('Kategori.kategori');
});
Route::get('/home', function () {
    return view('Home.home');
})->middleware('auth');
Route::get('/lis', function () {
    return view('Lis.lis');
});
Route::get('/lis1', function () {
    return view('Lis.lis1');
});
Route::get('/lis2', function () {
    return view('Lis.lis2');
});
Route::get('/lis3', function () {
    return view('Lis.lis3');
});
Route::get('/lis4', function () {
    return view('Lis.lis4');
});
Route::get('/lis5', function () {
    return view('Lis.lis5');
});
Route::get('/lis6', function () {
    return view('Lis.lis6');
});
Route::get('/lis7', function () {
    return view('Lis.lis7');
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
Route::get('/lowongan2', [lowonganController::class, 'index']);
Route::get('/pengguna', function () {
    return view('Pengguna.pengguna');
});
Route::get('/profil', [profilController::class, 'index']);
Route::get('/editProfil', [profilController::class, 'index2']);
Route::post('/editProfil', [profilController::class, 'edit']);
Route::post('/lowongan', [lowonganController::class, 'create']);
Route::get('/edit/{id}', [lowonganController::class, 'index2']);
Route::post('/edit/{id}', [lowonganController::class, 'edit']);
Route::get('/hapuslowongan/{Id}', [lowonganController::class, 'hapus']);
Route::get('/lowongan', [lowonganController::class, 'index']);
Route::get('/lowongan2', [lowonganController::class, 'test']);
Route::get('/cabanglowongan', [lowonganController::class, 'test']);
require __DIR__ . '/auth.php';
