<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = Suplier::all();
        return view('home.suplier.index',compact('suplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.suplier.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'nama_perusahaan'=>'required',
        ]);
        Suplier::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'nama_perusahaan'=>$request->nama_perusahaan,
            $request->except(['_token'])
        ]);
        return redirect('suplier')->with($validate)->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suplier = Suplier::find($id);
        return view('home.suplier.edit',compact('suplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        $validate = $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'nama_perusahaan'=>'required',
        ]);
        $suplier = Suplier::find($id);
        $suplier->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'nama_perusahaan'=>$request->nama_perusahaan,
            $request->except(['_token'])
        ]);
        return redirect('suplier')->with($validate)->with('success', 'Berhasil Merubah Data');
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
    }
}
