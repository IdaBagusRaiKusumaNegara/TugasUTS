<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Requests\DosenRequest;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDosen = Dosen::all();
        return view('Dosen.datadosen', compact('dtDosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtJur = Jurusan::all();
        return view('Dosen.createdosen', compact('dtJur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request)
    {
        Dosen::create([
            'nama_dsn' => $request->nama_dsn,
            'jkl_dsn' => $request->jkl_dsn,
            'tmpt_dsn' => $request->tmpt_dsn,
            'tgl_dsn' => $request->tgl_dsn,
            'status_peg' => $request->status_peg,
            'id_jurusan' => $request->id_jurusan
        ]);

        return redirect('datadosen')->with('success', 'Data Berhasil Tersimpan');
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
        $dsn = Dosen::findorfail($id);
        return view('Dosen.editdosen', compact('dsn', 'dtJur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosenRequest $request, $id)
    {
        $dsn = Dosen::findorfail($id);
        $dsn->update($request->all());
        return redirect('datadosen')->with('success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dsn = Dosen::findorfail($id);
        $dsn->delete();
        return back()->with('info', 'Data Berhasil Hapus');
    }
}
