<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Prodi;
use App\Http\Requests\KrsRequest;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKrs = Krs::all();
        return view('Krs.krsmahasiswa', compact('dtKrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtDsn = Dosen::all();
        $dtPrd = Prodi::all();
        return view('Krs.createkrsmahasiswa', compact('dtDsn','dtPrd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KrsRequest $request)
    {
        Krs::create([
            'mata_kuliah' => $request->mata_kuliah,
            'sks' => $request->sks,
            'id_prodi' => $request->id_prodi,
            'smtr' => $request->smtr,
            'id_dosen' => $request->id_dosen,
        ]);

        return redirect('krsmahasiswa')->with('success', 'Data Berhasil Tersimpan');
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
        $dtDsn = Dosen::all();
        $dtPrd = Prodi::all();
        $krs = Krs::findorfail($id);
        return view('Krs.editkrsmahasiswa', compact('krs', 'dtDsn','dtPrd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KrsRequest $request, $id)
    {
        $krs = Krs::findorfail($id);
        $krs->update($request->all());
        return redirect('krsmahasiswa')->with('success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $krs = Krs::findorfail($id);
        $krs->delete();
        return back()->with('info', 'Data Berhasil Hapus');
    }
}
