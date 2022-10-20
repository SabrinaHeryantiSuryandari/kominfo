<?php

namespace App\Http\Controllers;

use App\Models\pejabat;

use Illuminate\Http\Request;

class PejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabats = pejabat::all();

        return view('admin.input_pejabat',compact('pejabats'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pejabats = pejabat::all();

        return view('pejabat', compact('pejabats'));
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
            'kuasa_pengguna_anggaran' => 'required',
            'nip_kuasa_pengguna'=> 'required',
            'pejabat_pembuatan_komitmen' => 'required',
            'nip_pejabat_komitmen'=> 'required',
            'pejabat_pengadaan' => 'required',
            'nip_pejabat_kpengadaan' => 'required',
            'bpp' => 'required',
            'nip_bpp' => 'required'

        ]);
      
        Pejabat::create($request->all()); 
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        return redirect()->route('pejabats.index')
                        ->with('success','Data Pelaksana Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function show(pejabat $pejabat)
    {
        return view('admin.show',compact('pejabat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function edit(pejabat $pejabat)
    {
        return view('admin.edit',compact('pejabat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pejabat $pejabat)
    {
        $request->validate([
            'kuasa_pengguna_anggaran' => 'required',
            'nip_kuasa_pengguna'=> 'required',
            'pejabat_pembuatan_komitmen' => 'required',
            'nip_pejabat_komitmen'=> 'required',
            'pejabat_pengadaan' => 'required',
            'nip_pejabat_kpengadaan' => 'required',
            'bpp' => 'required',
            'nip_bpp' => 'required'
        ]);
    
        $pejabat->update($request->all());
    
        return redirect()->route('pejabats.index')
                        ->with('success','Aset Berhasil updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function destroy(pejabat $pejabat)
    {
        $pejabat->delete();
       
        return redirect()->route('pejabats.index')
                        ->with('success','Aset Berhasil Dihapus!');
    }
}
