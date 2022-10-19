<?php

namespace App\Http\Controllers;

use App\Models\pelaksana;
use App\Models\pengadaan;
use App\Models\barang;
use App\Models\jadwal;

use Illuminate\Http\Request;

class PelaksanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelaksanas = Pelaksana::all();
        $pengadaans = Pengadaan::all();
        // $barangs = Barang::all();
        // $jadwals = Jadwal::all();

        return view('admin.input_pelaksana',compact('pelaksanas'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.input_pelaksana');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'pt_pelaksana' => 'required',
            'alamat' => 'required',
            'nama_pelaksana' => 'required',
            'jabatan_pelaksana' => 'required',
            'kode_rekening' => 'required',
            'npwp' => 'required',
            'tlp' => 'required'
        ]);
      
        Pelaksana::create($request->all()); 
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        return redirect()->route('pelaksanas.index')
                        ->with('success','Data Pelaksana Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function show(pelaksana $pelaksana)
    {
        return view('admin.show',compact('pelaksana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelaksana $pelaksana)
    {
        return view('admin.edit',compact('pelaksana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelaksana $pelaksana)
    {
        $request->validate([
            'pt_pelaksana' => 'required',
            'alamat' => 'required',
            'nama_pelaksana' => 'required',
            'jabatan_pelaksana' => 'required',
            'kode_rekening' => 'required',
            'npwp' => 'required',
            'tlp' => 'required'
        ]);
    
        $pelaksana->update($request->all());
    
        return redirect()->route('pelaksanas.index')
                        ->with('success','Aset Berhasil updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelaksana  $pelaksana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelaksana $pelaksana)
    {
        $pelaksana->delete();
       
        return redirect()->route('pelaksanas.index')
                        ->with('success','Aset Berhasil Dihapus!');
    }
}
