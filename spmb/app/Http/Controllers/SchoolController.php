<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = DB::table('schools')->get();
        return view('schools.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $query = DB::table('schools')->insert([
            'name' => $request->name
        ]);

        if ($query) {
            session()->flash('success', 'Sekolah ' .$request->name. ' berhasil ditambahkan!');
            return redirect()->route('schools.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = DB::table('schools')->find($id);
        return view('schools.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $query = DB::table('schools')->where('id', $id)->update([
            'name' => $request->name
        ]);

        if ($query) {
            session()->flash('success', 'Sekolah ' .$request->name. ' berhasil diubah!');
            return redirect()->route('schools.index');
        } else {
            session()->flash('warning', 'Silahkan modifikasi dulu datanya!');
            return redirect('/schools/' .$id. '/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = DB::table('schools')->find($id);
        $query = DB::table('schools')->where('id', $id)->delete();

        if ($query) {
            session()->flash('success', 'Sekolah ' .$school->name. ' berhasil hapus!');
            return redirect()->route('schools.index');
        }
    }
}
