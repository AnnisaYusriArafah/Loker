<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PersyaratanController;
use App\Models\persyaratan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LokerController::class, 'hometamu']);
// Dashboard
Route::get('/homepage', [LokerController::class, 'index']);
// Menampilkan halaman dashboard.

Route::get('/Loker/{id}', [LokerController::class, 'detail']);
// Menampilkan detail film berdasarkan ID.

// CRUD Loker
Route::get('/Lokers/data', [LokerController::class, 'data'])->middleware('auth')->name('lokers.data');

// Memerlukan otentikasi untuk membaca data film.

Route::get('/Lokers/create', [LokerController::class, 'create'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pembuatan film.

Route::post('/Loker/store', [LokerController::class, 'store'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan data film baru.


Route::get('/Loker/{id}/edit', [LokerController::class, 'edit'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pengeditan film berdasarkan ID.

Route::put('/Loker/{id}/edit', [LokerController::class, 'update'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan perubahan pada data film berdasarkan ID.

Route::get('/Loker/delete/{id}', [LokerController::class, 'delete'])->middleware('auth');
// Memerlukan otentikasi untuk menghapus data film berdasarkan ID.


// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Menampilkan formulir login, hanya dapat diakses oleh tamu.
// Memberikan nama 'login' pada rute untuk referensi lebih mudah.
// Memerlukan pengguna untuk menjadi tamu (belum login).

Route::post('/login', [LoginController::class, 'authenticate']);
// Memproses permintaan login.
Route::post('/logout', [LoginController::class, 'logout']);
// Memproses permintaan logout.


Route::get('/persyaratan/create2', [PersyaratanController::class, 'create2'])->middleware(['auth'])->name('persyaratans.create');

Route::get('/data-pendaftar', [PersyaratanController::class, 'pendaftar']);
Route::post('/persyaratan/store2', [PersyaratanController::class, 'store2'])->middleware('web')->middleware('auth');
Route::get('/persyaratan/data', [PersyaratanController::class, 'data'])->middleware('auth')->name('persyaratans.data');
Route::get('/persyaratan/delete/{id}', [PersyaratanController::class, 'delete'])->middleware('auth');
