<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Suplier;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $suplier = Suplier::all();
        return view('home.barang.index',compact('barang','suplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suplier = Suplier::all();
        return view('home.barang.tambah',compact('suplier'));
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
            'id_suplier'=> 'required',
            'nama'=> 'required',
            'stok'=> 'required',
            'jenis'=> 'required',
        ]);

       
        Barang::create([
            'id_suplier'=>$request->id_suplier,
            'nama'=>$request->nama,
            'stok'=>$request->stok,
            'jenis'=>$request->jenis,
            $request->except(['_token']),
        ]);
        return redirect('barang')->with($validate)->with('success','berhasil menambahkan data')->with('timeout',3);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        $suplier = Suplier::all();
        return view('home.barang.edit',compact('barang','suplier'));
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
            'id_suplier'=>'required',
            'nama'=> 'required',
            'stok'=> 'required',
            'jenis'=> 'required',
        ]);
        $barang = Barang::find($id);
        $barang->update([
            'id_suplier'=>$request->id_suplier,
            'nama'=>$request->nama,
            'stok'=>$request->stok,
            'jenis'=>$request->jenis,
            $request->except(['_token']),
        ]);
        return redirect('barang')->with($validate)->with('success','Berhasil Merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang')->with('success','Berhasil Mengahapus data');
    }
}
