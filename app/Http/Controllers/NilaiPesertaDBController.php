<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaDBController extends Controller
{
    public function index()
    {

        // mengambil data dari table nilai_peserta
        $nilai_peserta = DB::table('nilai_peserta')->orderBy('nopeserta')->get();
    	// mengirim data nilai ke view index
    	return view('eas.index',['nilai_peserta' => $nilai_peserta]);
    }
    // method untuk menampilkan view form tambah siswa
	public function tambah()
	{

		// memanggil view tambah
		return view('eas.tambah');

	}

	// method untuk insert data ke table siswa
	public function store(Request $request)
	{

        $request->validate([
            'nopeserta' => 'required|string|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer',
        ]);

		// insert data ke table pegawai
		DB::table('nilai_peserta')->insert([
			'nopeserta' => $request->nopeserta,
			'nilaiteori' => $request->nilaiteori,
			'nilaipraktek' => $request->nilaipraktek
		]);
		// alihkan halaman ke halaman index
		// return redirect('/eas');
        return redirect()->route('eas.index');

	}


}

