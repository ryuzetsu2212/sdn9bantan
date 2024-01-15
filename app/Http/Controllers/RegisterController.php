<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RegisterController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    protected function redirectTo()
    {
        return '/auth/login'; // Ubah sesuai rute yang ingin dituju setelah registrasi
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20|confirmed',
            'level' => 'required'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->status = 'pending'; // Tambahkan status sebagai 'pending' untuk persetujuan admin

        $user->save();

        if ($user) {
            // Hapus atau komentari baris di bawah untuk mencegah autentikasi otomatis
            // Auth::login($user);

            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, tunggu persetujuan admin untuk login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }



    public function index()
    {
        $users = User::where('level', 'user')->get(); // Mengambil data dari model User dengan level=user
        return view('user.index', ['users' => $users]);
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->status == 'approved') { // Periksa status pengguna apakah sudah disetujui
                if ($user->level == 'user') {
                    return redirect('/user/index');
                } elseif ($user->level == 'admin') {
                    return redirect('/admin/index');
                }
            } else {
                Auth::logout(); // Logout jika belum disetujui
                return back()->with('failed', 'Akun Anda belum disetujui oleh admin.');
            }
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
