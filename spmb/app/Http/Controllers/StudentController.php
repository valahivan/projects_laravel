<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')
                      ->join('schools', 'schools.id', 'students.school_id')
                      ->join('majors', 'majors.id', 'students.major_id')
                      ->select('students.*', 'schools.name as school', 'majors.name as major')->get();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = DB::table('schools')->get();
        $majors = DB::table('majors')->get();

        return view('students.create', ['schools' => $schools, 'majors' => $majors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query = DB::table('students')->insert([
            'name' => $request->name,
            'place_birth' => $request->place_birth,
            'date_birth' => $request->date_birth,
            'gender' => $request->gender,
            'school_id' => $request->school_id,
            'major_id' => $request->major_id,
            'no_wa' => $request->no_wa
        ]);
        
        if ($query) {
            session()->flash('success', true);
            return redirect()->route('students.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = DB::table('students')->find($id);
        $query = DB::table('students')->where('id', $id)->delete();

        if ($query) {
            session()->flash('success', 'Data ' .$students->name. ' berhasil dihapus');
            return redirect()->route('students.index');
        }
    }
}
