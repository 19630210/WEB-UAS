<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Makul;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with('makul','mahasiswa')->get();
        return view('nilai.index', compact('nilai'));

        
    }

    public function create()
    {
        $makul =Makul::all();
        $mahasiswa =Mahasiswa::all();
        return view('nilai.create',compact('makul','mahasiswa')); 
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan.');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $makul =Makul::all();
        $mahasiswa =Mahasiswa::all();
        $nilai= Nilai::find($id);
        return view('nilai.edit', compact('makul', 'mahasiswa', 'nilai'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Oh Yeah Data Diupdate','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Oh Yeah Data DiHapus','success');
        return redirect()->route('nilai');
    }
}
