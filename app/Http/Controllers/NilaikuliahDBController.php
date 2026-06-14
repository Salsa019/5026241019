<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahDBController extends Controller
{
    public function index()
    {

            // mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('NRP')->get();
    	// mengirim data nilai ke view index
    	return view('nilaikuliah.index', compact('nilaikuliah'));
    }

    	// method untuk menampilkan view form tambah siswa
	public function tambah()
	{

		// memanggil view tambah
		return view('nilaikuliah.tambah');

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
		// return redirect('/nilaikuliah');
        return redirect()->route('nilaikuliah.index');

	}


}

