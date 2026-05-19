<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;

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
