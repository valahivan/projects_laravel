<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = DB::table('majors')->get();
        return view('majors.index', ['majors' => $majors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required'
        ],
        [
            'required' => 'Input :attribute tidak boleh kosong!',
            'min' => 'Input :attribute minimal 5 karakter!'
        ]);

        $query = DB::table('majors')->insert([
            'name' => $request->name,
            'description' => $request->description
        ]);

        if ($query) {
            session()->flash('success', 'Jurusan ' .$request->name.' berhasil ditambahkan!');
            return redirect()->route('majors.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $major = DB::table('majors')->find($id);
        return view('majors.detail', ['major' => $major]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $major = DB::table('majors')->find($id);
        return view('majors.edit', ['major' => $major]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required'
        ],
        [
            'required' => 'Input :attribute tidak boleh kosong!',
            'min' => 'Input :attribute minimal 5 karakter!'
        ]);

        $query = DB::table('majors')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        if ($query) {
            session()->flash('success', 'Jurusan ' .$request->name.' berhasil diubah!');
            return redirect()->route('majors.index');
        }else{
            session()->flash('warning', 'Silahkan modifikasi dulu datanya!');
            return redirect('/majors/' .$id. '/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $major = DB::table('majors')->find($id);
        $query = DB::table('majors')->where('id', $id)->delete();
        if ($query) {
            session()->flash('success', 'Jurusan ' .$major->name.' berhasil hapus!');
            return redirect()->route('majors.index');
        }
    }
}
