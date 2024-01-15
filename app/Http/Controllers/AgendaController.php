<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtikelRequest as Request;

use App\Models\Artikel;

class AgendaController extends Controller
{
    public function index()
    {
    	return view('agenda.index',compact('agenda'));
    }
}
