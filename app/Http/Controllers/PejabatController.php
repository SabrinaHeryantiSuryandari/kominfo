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
        $pejabat = Pejabat::all();

        return view('index.admin', ['pejabat' => $pejabat]);
        // return view('admin.input_pejabat', compact('pejabats'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pejabats = pejabat::all();

        // return view('pejabat', compact('pejabats'));

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
            'id' => 'required',
            'tahun_sk' => 'required',
            'tanggal_sk' => 'required',
            'nomor_sk' => 'required',
            'kuasa_pengguna_anggaran' => 'required',
            'nip_kuasa_pengguna' => 'required',
            'pejabat_pembuatan_komitmen' => 'required',
            'nip_pejabat_komitmen' => 'required',
            'pejabat_pengadaan' => 'required',
            'nip_pejabat_kpengadaan' => 'required',
            'bpp' => 'required',
            'nip_bpp' => 'required'

        ]);

        Pejabat::create($request->all());
        // $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        // $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['nama', 'keterangan', 'aset_id'])]);

        return redirect()->route('pejabat.index')
            ->with('success', 'Data Pelaksana Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function show(pejabat $pejabat)
    {
        // return view('admin.show', compact('pejabat'));
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Detail Data Post',
        //     'data'    => $pejabat 
        // ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pejabat  $pejabat
     * @return \Illuminate\Http\Response
     */
    public function edit(pejabat $pejabat)
    {
        // $pejabat = Pejabat::find($id);
        // $pejabat->distribution_code=Input::get('distribution_code');
        // $pejabat->destination=Input::get('destination');
        // $pejabat->hlr=Input::get('hlr');
        // $pejabat->first_iccid=Input::get('first_iccid');
        // $pejabat->last_iccid=Input::get('last_iccid');
        // $pejabat->quantity=Input::get('quantity');

        return view('index.admin', compact('pejabat'));
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
            'tahun_sk' => 'required',
            'tanggal_sk' => 'required',
            'nomor_sk' => 'required',
            'kuasa_pengguna_anggaran' => 'required',
            'nip_kuasa_pengguna' => 'required',
            'pejabat_pembuatan_komitmen' => 'required',
            'nip_pejabat_komitmen' => 'required',
            'pejabat_pengadaan' => 'required',
            'nip_pejabat_kpengadaan' => 'required',
            'bpp' => 'required',
            'nip_bpp' => 'required'
        ]);

        $pejabat->update($request->all());

        return redirect()->route('index.admin');
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

        return redirect()->route('pejabat.index')
            ->with('success', 'Aset Berhasil Dihapus!');
    }

    public function ubahpejabat($id)
    {
    $pejabat = Pejabat::select('*')
                ->where('id', $id)
                ->get();

    return view('index.admin', ['pejabat' => $pejabat]);
    }
    public function updatesantri(Request $request)
    {
    $pejabat = Pejabat::where('id', $request->id)
                ->update([
                    'tahun_sk' => $request->tahun_sk,
                    'tanggal_sk' => $request->tanggal_sk,
                    'nomor_sk' => $request->nomor_sk,
                    'kuasa_pengguna_anggaran' => $request->kuasa_pengguna_anggaran,
                    'nip_kuasa_pengguna' => $request->nip_kuasa_pengguna,
                    'pejabat_pembuatan_komitmen' => $request->pejabat_pembuatan_komitmen,
                    'nip_pejabat_komitmen' => $request->nip_pejabat_komitmen,
                    'pejabat_pengadaan' => $request->pejabat_pengadaan,
                    'nip_pejabat_kpengadaan' => $request->nip_pejabat_kpengadaan,
                    'bpp' => $request->bpp,
                    'nip_bpp' => $request->nip_bpp
                ]);

    return redirect()->route('home');
    }
}
