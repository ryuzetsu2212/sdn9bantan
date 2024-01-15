<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kriteria;

class HitungController extends Controller
{

    public function index(Request $request)
    {

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = $kriteria - 0.39;
        $bobot2 = $kriteria - 0.72;
        $bobot3 = $kriteria - 0.89;

        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];



        $Siswa = Siswa::get();
        $data = Siswa::orderby('nama_siswa', 'asc')->get();

        $minC1 = Siswa::min('kriteria_1');
        $maxC1 = Siswa::max('kriteria_1');
        $minC2 = Siswa::min('kriteria_2');
        $maxC2 = Siswa::max('kriteria_2');
        $minC3 = Siswa::min('kriteria_3');
        $maxC3 = Siswa::max('kriteria_3');


        $C1min = [
            'siswa' => $minC1,
        ];
        $C1max = [
            'siswa' => $maxC1,
        ];
        $C2min = [
            'siswa' => $minC2,
        ];
        $C2max = [
            'siswa' => $maxC2,
        ];
        $C3min = [
            'siswa' => $minC3,
        ];
        $C3max = [
            'siswa' => $maxC3,
        ];


        $hasil = $minC1 / $maxC1;
        $hasil1 = [
            'siswa' => $hasil,
        ];

        $sortedData = $data->sortByDesc(function ($siswa) use ($C1max, $C2min, $C3max, $widget1, $widget2, $widget3) {
            return (($siswa->kriteria_1 / $C1max['siswa']) * $widget1['kriteria']) +
                (($C2min['siswa'] / $siswa->kriteria_2) * $widget2['kriteria']) +
                (($siswa->kriteria_3 / $C3max['siswa']) * $widget3['kriteria']);
        });

        return view('user.hitung', [
            'data' => $data,
            'C1max' => $C1max,
            'C2min' => $C2min,
            'C3max' => $C3max,
            'widget1' => $widget1,
            'widget2' => $widget2,
            'widget3' => $widget3,
            'hasil1' => $hasil1,
            'sortedData' => $sortedData,
        ]);
        
    }
}
