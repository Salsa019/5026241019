<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

// kumpulan tugas
Route::get('menu', [PageController::class, 'idx']);
Route::get('intro', [PageController::class, 'p2intro']);
Route::get('news', [PageController::class, 'p2news']);
Route::get('news1', [PageController::class, 'p2news1']);
Route::get('responsive', [PageController::class, 'p3responsive']);
Route::get('template', [PageController::class, 'p3template']);
Route::get('tables', [PageController::class, 'p3contohtables']);
Route::get('pertemuan4', [PageController::class, 'p4']);
Route::get('pertemuan5', [PageController::class, 'p5']);
Route::get('index', [PageController::class, 'githubindex']);
Route::get('linktree', [PageController::class, 'p5linktree']);
Route::get('pra-ets', [PageController::class, 'tugas_ets']);
Route::get('ets', [PageController::class, 'ets_asa']);

// pertemuan 9
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
