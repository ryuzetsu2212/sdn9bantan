<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index',[
            'agenda' => Agenda::latest()->take(2)->get(),
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
        ]);
    }

    
    public function about()
    {
        $agenda = Artikel::with(['user','kategoriArtikel'])->latest()->paginate(4);
    	return view('home.about');
    }

    public function contact()
    {
    	return view('home.contact');
    }

    public function visimisi()
    {
    	return view('home.visimisi');
    }

    public function profilsekolah()
    {
    	return view('home.profilsekolah');
    }

    public function kelas1()
    {
    	return view('home.kelas1');
    }

    public function kelas2a()
    {
    	return view('home.kelas2a');
    }

    public function kelas2b()
    {
    	return view('home.kelas2b');
    }

    public function kelas3()
    {
    	return view('home.kelas3');
    }

    public function kelas4a()
    {
    	return view('home.kelas4a');
    }

    public function kelas4b()
    {
    	return view('home.kelas4b');
    }

    public function kelas5()
    {
    	return view('home.kelas5');
    }

    public function kelas6a()
    {
    	return view('home.kelas6a');
    }

    public function kelas6b()
    {
    	return view('home.kelas6b');
    }
}
