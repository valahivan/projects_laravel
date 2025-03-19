<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $dataJurusan = DB::table('majors')->count();
        $dataSekolah = DB::table('schools')->count();
        $dataSiswa = DB::table('students')->count();

        return view('dashboards.index', [
            'jurusan' => $dataJurusan,
            'sekolah' => $dataSekolah,
            'siswa' => $dataSiswa
        ]);
    }
}
