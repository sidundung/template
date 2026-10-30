<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = \App\Models\Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        \App\Models\Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = \App\Models\Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        \App\Models\Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index');
    }
}
