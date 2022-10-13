@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
<!-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection -->

<!-- Content Row -->

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="" method="POST">
    @csrf

<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Masukan Pengadaan</h4>
                  <p class="card-description">
                    SK Pejabat Pengadaan
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputTanggal">Tanggal</label>
                      <input type="text" class="form-control" id="exampleInputTanggal" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNomor">Nomor</label>
                      <input type="text" class="form-control" id="exampleInputNomor" placeholder="">
                    </div>
                  </form>
                  <p class="card-description">
                    SK Pejabat Pemeriksa Administratif
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputTanggal">Tanggal</label>
                      <input type="text" class="form-control" id="exampleInputTanggal" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNomor">Nomor</label>
                      <input type="text" class="form-control" id="exampleInputNomor" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNama">Nama</label>
                      <input type="text" class="form-control" id="exampleInputNama" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNIP">NIP</label>
                      <input type="text" class="form-control" id="exampleInputNIP" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNoBA">No. BA Hasil Pem. Adm.</label>
                      <input type="text" class="form-control" id="exampleInputNoBA" placeholder="">
                    </div>
                  </form>
                  <p class="card-description">
                    Bidang Pengelolaan
                  </p>
                  <form class="forms-sample">
                  <div class="form-group">
                      <label for="exampleSelectProgram">Program</label>
                        <select class="form-control" id="exampleSelectProgram">
                          <option>Penyelenggaraan Statistik Sektoral</option>
                          <option>Penyelenggaraan Statistik Sektoral</option>
                          <option>Penyelenggaraan Statistik Sektoral</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputKegiatan">Kegiatan</label>
                      <input type="text" class="form-control" id="exampleInputKegiatan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleSubKegiatan">Sub Kegiatan</label>
                      <textarea class="form-control" id="exampleSubKegiatan" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPekerjaan">Pekerjaan</label>
                      <input type="email" class="form-control" id="exampleInputPekerjaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputKodeRekening">Kode Rekening</label>
                      <input type="password" class="form-control" id="exampleInputKodeRekening" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleUraianBelanja">Uraian Belanja</label>
                      <textarea class="form-control" id="exampleUraianBelanja" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputSumberDana">Sumber Dana</label>
                      <input type="password" class="form-control" id="exampleInputSumberDana" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTanggalPelaksanaan">Tanggal Pelaksanaan</label>
                      <input type="text" class="form-control" id="exampleInputTanggalPelaksanaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBatasWaktuPenyelesaian">Batas Waktu Penyelesaian</label>
                      <input type="text" class="form-control" id="exampleInputBatasWaktuPenyelesaian" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputJkWaktuPengerjaan">Jk Waktu Pengerjaan</label>
                      <input type="text" class="form-control" id="exampleInputJkWaktuPengerjaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTglmulaipekerjaan">Tgl Mulai Pekerjaan</label>
                      <input type="email" class="form-control" id="exampleInputTglmulaipekerjaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputTempat">Tempat</label>
                      <input type="email" class="form-control" id="exampleInputTempat" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputKota">Kota</label>
                      <input type="email" class="form-control" id="exampleInputKota" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPelaksana">Pelaksana</label>
                      <input type="email" class="form-control" id="exampleInputPelaksana" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAlamat">Alamat</label>
                      <input type="email" class="form-control" id="exampleInputAlamat" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputYangTTD">Yang TTD</label>
                      <input type="email" class="form-control" id="exampleInputYangTTD" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputJabatan">Jabatan</label>
                      <input type="email" class="form-control" id="exampleInputJabatan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNPWP">NPWP</label>
                      <input type="email" class="form-control" id="exampleInputNPWP" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNo.Tlpn">No.Tlpn</label>
                      <input type="email" class="form-control" id="exampleInputNo.Tlpn" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFax">Fax</label>
                      <input type="email" class="form-control" id="exampleInputFax" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" placeholder="">
                    </div>
                    <p class="card-description">
                    Surat Penawaran
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputNo.Surat">No.Surat</label>
                      <input type="text" class="form-control" id="exampleInputNo.Surat" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputJkWaktuPekerjaan">Jk Waktu Pekerjaan</label>
                      <input type="text" class="form-control" id="exampleInputJkWaktuPekerjaan" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputJkWaktuPenawaran">Jk Waktu Penawaran</label>
                      <input type="text" class="form-control" id="exampleInputJkWaktuPenawaran" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputNo.Kwitansi">No.Kwitansi</label>
                      <input type="text" class="form-control" id="exampleInputNo.Kwitansi" placeholder="">
                    </div>
                  </form>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>

@endsection