<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaDBController extends Controller
{
    public function indexsepeda()
    {
        // mengambil data dari table sepeda
        $sepeda = DB::table('sepeda')->paginate(10);

        // mengirim data sepeda ke view index
        return view('indexsepeda', ['sepeda' => $sepeda]);
    }

    // method untuk menampilkan view form tambah sepeda
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahsepeda');
    }

    // method untuk insert data ke table sepeda
    public function store(Request $request)
    {
        // insert data ke table sepeda
        // kodesepeda tidak diisi karena AUTO_INCREMENT ("AutoNumber") mengisinya otomatis
        DB::table('sepeda')->insert([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman sepeda
        return redirect('/sepeda');
    }

    // method untuk edit data sepeda
    public function edit($kodesepeda)
    {
        // mengambil data sepeda berdasarkan kode yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $kodesepeda)->get();
        // passing data sepeda yang didapat ke view editsepeda.blade.php
        return view('editsepeda', ['sepeda' => $sepeda]);
    }

    // update data sepeda
    public function update(Request $request)
    {
        // update data sepeda
        DB::table('sepeda')->where('kodesepeda', $request->kodesepeda)->update([
            'merksepeda'  => $request->merksepeda,
            'stocksepeda' => $request->stocksepeda,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman sepeda
        return redirect('/sepeda');
    }

    // method untuk hapus data sepeda
    public function hapus($kodesepeda)
    {
        // menghapus data sepeda berdasarkan kode yang dipilih
        DB::table('sepeda')->where('kodesepeda', $kodesepeda)->delete();

        // alihkan halaman ke halaman sepeda
        return redirect('/sepeda');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sepeda sesuai pencarian merk
        $sepeda = DB::table('sepeda')
            ->where('merksepeda', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data sepeda ke view index
        return view('indexsepeda', ['sepeda' => $sepeda]);
    }
}
