<?php

namespace App\Http\Controllers;

use App\Models\pelaksana;
use App\Models\pengadaan;
use App\Models\barang;
use App\Models\jadwal;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pelaksanas = Pelaksana::all();
        //$pengadaans = Pengadaan::all();
        // $barangs = Barang::all();
        $jadwals = Jadwal::all();

        return view('admin.input_jadwal', compact('jadwals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.input_jadwal');
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
            'pengadaan_id' => 'required',
            'kegiatan' => 'required',
            'alokasi' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
            'deskripsi_tgl' => 'required'
        ]);

        Jadwal::create($request->all());
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        return redirect()->route('jadwals.index')
            ->with('success', 'Data Jadwal Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {
        return view('admin.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        return view('admin.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        $request->validate([
            'pengadaan_id' => 'required',
            'kegiatan' => 'required',
            'alokasi' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'nomor' => 'required',
            'deskripsi_tgl' => 'required'
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwals.index')
            ->with('success', 'Jadwal Berhasil updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwals.index')
            ->with('success', 'Jadwal Berhasil Dihapus!');
    }
}
