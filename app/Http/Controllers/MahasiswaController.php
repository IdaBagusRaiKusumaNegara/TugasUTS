<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMahasiswa = Mahasiswa::with('jurusan');
        $dtMahasiswa = Mahasiswa::all();
        return view('Mahasiswa.datamahasiswa', compact('dtMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtJur = Jurusan::all();
        return view('Mahasiswa.createmahasiswa', compact('dtJur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'jenkel' => $request->jenkel,
            'tempat' => $request->tempat,
            'tgllahir' => $request->tgllahir,
            'id_jurusan' => $request->id_jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect('datamahasiswa')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtJur = Jurusan::all();
        $mhs = Mahasiswa::with('jurusan')->findorfail($id);
        return view('Mahasiswa.editmahasiswa', compact('mhs','dtJur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, $id)
    {
        $mhs = Mahasiswa::findorfail($id);
        $mhs->update($request->all());
        return redirect('datamahasiswa')->with('success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findorfail($id);
        $mhs->delete();
        return back()->with('info', 'Data Berhasil Hapus');
    }
}
