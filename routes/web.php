<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SepedaDBController;
use App\Http\Controllers\NilaikuliahDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaDBController;

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
// Route::get('/', [PageController::class, 'idx']);
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

//route CRUD tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

// pr sepeda
Route::get('/sepeda', [SepedaDBController::class, 'indexsepeda']);
Route::get('/sepeda/cari', [SepedaDBController::class, 'cari']);
Route::get('/sepeda/tambah', [SepedaDBController::class, 'tambah']);
Route::post('/sepeda/store', [SepedaDBController::class, 'store']);
Route::get('/sepeda/edit/{kodesepeda}', [SepedaDBController::class, 'edit']);
Route::post('/sepeda/update', [SepedaDBController::class, 'update']);
Route::get('/sepeda/hapus/{kodesepeda}', [SepedaDBController::class, 'hapus']);

// latihan 1 eas perempuan
Route::get('/nilaikuliah', [NilaikuliahDBController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaikuliahDBController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaikuliahDBController::class, 'store'])->name('nilaikuliah.store');

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'hapus'])->name('siswa.hapus');

//route CRUD belanja - latihan 2 eas laki2
Route::get('/belanja', [BelanjaDBController::class, 'index'])->name('belanja.index');
Route::get('/belanja/tambah', [BelanjaDBController::class, 'tambah'])->name('belanja.tambah');
Route::post('/belanja/store', [BelanjaDBController::class, 'store'])->name('belanja.store');
Route::get('/belanja/hapus/{id}', [BelanjaDBController::class, 'hapus'])->name('belanja.hapus');
