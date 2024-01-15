<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $data = Siswa::all();
        return view('user.siswa', compact('data'));
    }
    public function tambah()
    {

        return view('user.tambah_siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);

        return view('user.edit_siswa', compact('siswa'));
    }



    public function postTambah(Request $request)
    {
        $nama_siswa = $request->input('nama_siswa');
        $kriteria_1 = $request->input('kriteria_1');
        $kriteria_2 = $request->input('kriteria_2');
        $kriteria_3 = $request->input('kriteria_3');


        $siswa = new Siswa;
        $siswa->nama_siswa = $nama_siswa;
        $siswa->kriteria_1 = $kriteria_1;
        $siswa->kriteria_2 = $kriteria_2;
        $siswa->kriteria_3 = $kriteria_3;


        $siswa->save();

        if ($siswa) {
            return redirect('/user/siswa');
        } else {
            return back();
        }
    }

    public function postEdit(Request $request, $id)
    {

        $siswa = Siswa::find($id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->kriteria_1 = $request->kriteria_1;
        $siswa->kriteria_2 = $request->kriteria_2;
        $siswa->kriteria_3 = $request->kriteria_3;


        $siswa->save();

        if ($siswa) {
            return redirect('/user/siswa');
        } else {
            return back();
        }
    }

    public function deleteSiswa($id)
    {
        $siswa = Siswa::find($id);


        $siswa->delete();

        if ($siswa) {
            return redirect('/user/siswa');
        } else {
            return back();
        }
    }
}
