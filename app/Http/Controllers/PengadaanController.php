<?php

namespace App\Http\Controllers;

use App\Models\pengadaan;
use App\Models\pelaksana;
use App\Models\barang;
use App\Models\jadwal;

use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = Pengadaan::all();
        $pelaksanas = Pelaksana::all();
        $barangs = Barang::all();
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
        // return view('admin.input_pengadaan');
        $pelaksanas = pelaksana::all();
        // $pengadaans = Pengadaan::all();
        $barangs = barang::all();
        
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
        // $request->validate([
            // 'id' => 'required',
            // 'perusahaan_id' => 'required',
            // 'jenis_pengadaan' => 'required',
            // 'tanggal_acara' => 'required',
            // 'deskripsi_tgl_acara' => 'required',
            // 'waktu_acara' => 'required',
            // 'tempat_acara' => 'required',
            // 'total_hps' => 'required',
            // 'deskripsi_hps' => 'required',
            // 'nilai_negosiasi' => 'required',
            // 'nilai_negosiasi' => 'required'
        // ]);
      
        // Jadwal::create($request->all()); 
        
        // return redirect()->route('jadwals.index')
        //                 ->with('success','Data Pelaksana Berhasil Disimpan!');

        $pelaksanas =   Pelaksana::create($request->except([

            'jenis_pengadaan',
            'tanggal_acara',
            'deskripsi_tgl_acara',
            'waktu_acara',
            'tempat_acara',
            'total_hps',
            'deskripsi_hps',
            'nilai_negosiasi',
            'deskripsi_nilai_nego',        
        ]));

        $request['pelaksana_id'] = $pelaksanas->id;
        $pengadaans = Pengadaan::create($request->only([
            'pelaksana_id',
            'jenis_pengadaan',
            'tanggal_acara',
            'deskripsi_tgl_acara',
            'waktu_acara',
            'tempat_acara',
            'total_hps',
            'deskripsi_hps',
            'nilai_negosiasi',
            'deskripsi_nilai_nego'        
        ]));

        return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function show(pengadaan $pengadaan)
    {
        return view('admin.lihat',compact('pengadaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pengadaan $pengadaan)
    {
        return view('admin.edit',compact('pengadaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengadaan $pengadaan)
    {
        // $pelaksanas =   Pelaksana::updating($request->except([
        //     'pelaksana_id',
        //     'jenis_pengadaan',
        //     'tanggal_acara',
        //     'deskripsi_tgl_acara',
        //     'waktu_acara',
        //     'tempat_acara',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'nilai_negosiasi',
        //     'deskripsi_nilai_nego',        
        // ]));

        // $request['pelaksana_id'] = $pelaksanas ->id;
        // $pengadaans = Pengadaan::updating($request->only([
        //     'pelaksana_id',
        //     'jenis_pengadaan',
        //     'tanggal_acara',
        //     'deskripsi_tgl_acara',
        //     'waktu_acara',
        //     'tempat_acara',
        //     'total_hps',
        //     'deskripsi_hps',
        //     'nilai_negosiasi',
        //     'deskripsi_nilai_nego'        
        // ]));

        // return back()->with('success',' Post baru berhasil dibuat.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengadaan $pengadaan)
    {
        $pengadaan->delete();
       
        return redirect()->route('pengadaans.index')
                        ->with('success','Aset Berhasil Dihapus!');
    }
}
