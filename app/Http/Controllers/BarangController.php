<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pelaksana;
use App\Models\pengadaan;
use App\Models\jadwal;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = pengadaan::all();
        // $pelaksanas = Pelaksana::all();
        $barangs = barang::all();
        // $jadwals = Jadwal::all();

        return view('admin.input_pengadaan',compact('pengadaans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengadaans = pengadaan::all();

        return view('pengadaan', compact('pelaksanas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengadaans =   pengadaan::create($request->except([

            
            'barang',
            'jumlah_barang',
            'satuan',
            'harga_satuan'      
        ]));

        $request['pengadaan_id'] = $pengadaans->id;
        $barangs = Barang::create($request->only([
            'pengadaan_id',
            'barang',
            'jumlah_barang',
            'satuan',
            'harga_satuan'     
        ]));

        return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        return view('admin.lihat',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('admin.lihat',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
       
        return redirect()->route('barang.index')
                        ->with('success','Aset Berhasil Dihapus!');
    }
}
