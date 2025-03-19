<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    public function download($file){
        $path = storage_path('app/public/' . $file);
        if (!file_exists($path)) {
            abort(404);
        }
        return response()->download($path, $file);
    }

    public function downloadSurat($id){
        $data = DB::table('students')
                  ->leftJoin('schools', 'schools.id', 'students.school_id')
                  ->leftJoin('majors', 'majors.id', 'students.major_id')
                  ->select('students.*', 'schools.name as school', 'majors.name as major')
                  ->where('students.id', '=', $id)->first();

        if(!$data){
            abort(404);
        }

        $pdf = Pdf::loadView('students.surat_bukti_daftar', ['data' => $data]);
        return $pdf->stream('surat_bukti_daftar.pdf');
    }
    
}
