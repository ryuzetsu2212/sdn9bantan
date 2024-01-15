<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwalPelajaran = Jadwal::paginate(10); // Mengambil semua data jadwal pelajaran
        return view('user.jadwal_pelajaran', compact('jadwalPelajaran')); // Mengirim data ke view
    }

    public function create()
    {
        // Jika ada data yang diperlukan untuk formulir tambah, dapat diinisialisasi di sini
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari $request jika diperlukan
        $validatedData = $request->validate([
            'kelas' => 'sometimes',
            'jam_ke' => 'sometimes',
            'waktu' => 'sometimes',
            'senin' => 'sometimes',
            'selasa' => 'sometimes',
            'rabu' => 'sometimes',
            'kamis' => 'sometimes',
            'jumat' => 'sometimes',
            'sabtu' => 'sometimes',
            // Definisikan aturan validasi untuk kolom-kolom lain jika ada
        ]);

        // Buat data baru berdasarkan input
        Jadwal::create($validatedData);

        return redirect()->route('user.jadwal_pelajaran.index')->with('success', 'Data berhasil ditambah');
    }


    public function edit($id)
    {
        $jadwalPelajaran = Jadwal::find($id); // Mengambil data jadwal berdasarkan ID

        return view('user.edit_jadwal', compact('jadwalPelajaran'));
    }


    public function update(Request $request, Jadwal $jadwal)
    {
        // Validasi data dari $request jika diperlukan
        $validatedData = $request->validate([
            'kelas' => 'sometimes',
            'jam_ke' => 'sometimes',
            'waktu' => 'sometimes',
            'senin' => 'sometimes',
            'selasa' => 'sometimes',
            'rabu' => 'sometimes',
            'kamis' => 'sometimes',
            'jumat' => 'sometimes',
            'sabtu' => 'sometimes',
            // Add validation rules for other fields if needed
        ]);

        // Update the Jadwal model attributes with the validated data
        $jadwal->update($validatedData);

        return redirect()->route('user.jadwal_pelajaran.index')->with('success', 'Data berhasil diupdate');
    }


    public function destroy(Jadwal $jadwal)
    {
        // Hapus data jadwal yang dipilih
        $jadwal->delete();
        return redirect()->route('user.jadwal_pelajaran.index')->with('success', 'Data berhasil dihapus');
    }
}
