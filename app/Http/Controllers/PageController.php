<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function idx()       { return view('idx'); } // method indeks untuk menampilkan halaman menu utama yang berisi kumpulan link tugas pertemuan 1 - 6
    public function p2intro()    { return view('p2intro'); } // method intro untuk menampilkan halaman p2intro
    public function p2news()     { return view('p2news'); } // penamaan 'p2news' harus konsisten dengan nama file blade
    public function p2news1()    { return view('p2news1'); }
    public function p3responsive() { return view('p3responsive'); }
    public function p3template() { return view('p3template'); }
    public function p3contohtables()  { return view('p3contohtables'); }
    public function p4()         { return view('p4'); }
    public function p5()         { return view('p5'); }
    public function githubindex()  { return view('githubindex'); }
    public function p5linktree()  { return view('p5linktree'); }
    public function tugas_ets()  { return view('tugas_ets'); }
    public function ets_asa()  { return view('ets_asa'); }
}


