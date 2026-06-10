<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahDBController extends Controller
{
    public function indexlatihaneas()
    {

            // mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();
    	// mengirim data nilai ke view index
    	return view('indexlatihaneas',['nilaikuliah' => $nilaikuliah]);
    }

    	// method untuk menampilkan view form tambah siswa
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahlatihaneas');

	}

	// method untuk insert data ke table siswa
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}


}

