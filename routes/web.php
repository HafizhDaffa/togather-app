<?php

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
Route::get('/profil', [profilController::class, 'index']);
Route::get('/editProfil', [profilController::class, 'index2']);
Route::post('/editProfil', [profilController::class, 'edit']);



require __DIR__ . '/auth.php';
