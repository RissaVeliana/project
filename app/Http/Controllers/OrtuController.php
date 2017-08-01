<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ortu;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ortu = ortu::with('siswa')->get();
        return view('ortu.index', compact('ortu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ortu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ortu = new ortu();
        $ortu->nama_ayah=$request->na;
        $ortu->nama_ibu=$request->ni;
        $ortu->umur_ayah=$request->ua;
        $ortu->umur_ibu=$request->ui;
        $ortu->alamat=$request->alamat;
        $ortu->save();
        return redirect()->route('orangtua.index')->with('alert-succes', 'data berhasil disimpan');
          
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
        $ortu = ortu::findOrfail($id);
        return view('ortu.show',compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ortu = ortu::findOrfail($id);
        return view('ortu.edit',compact('ortu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ortu =ortu::findOrfail($id);
        $ortu->nama_ayah=$request->na;
        $ortu->nama_ibu=$request->ni;
        $ortu->umur_ayah=$request->ua;
        $ortu->umur_ibu=$request->ui;
        $ortu->alamat=$request->alamat;
        $ortu->save();
        return redirect('orangtua');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ortu = ortu::findOrfail($id);
        $ortu->delete();
        return redirect('orangtua');
    }
}
