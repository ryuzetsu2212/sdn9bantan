<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->level === 'admin') {
            return view('admin.index'); // Tampilkan dashboard admin
        } else {
            return view('user.index'); // Tampilkan dashboard pengguna biasa
        }
    }
}
