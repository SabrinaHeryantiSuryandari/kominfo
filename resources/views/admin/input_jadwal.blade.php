@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
@section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection

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

<div class="col-12 grid-margin stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <h4 class="card-title">Data Masukan Jadwal</h4>

      <form>
        @csrf
        <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nomor</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
              <label class="col-sm-3 col-form-label">Kegiatan</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
              <label class="col-sm-3 col-form-label">Alokasi</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" />
              </div>
                <label class="col-sm-3 col-form-label">Hari</label>
                <div class="col-sm-9">
                  <select class="form-control">
                  {{--  nnti di masukin db  --}}
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                    <option>Sabtu</option>
                    <option>Minggu</option>
                  </select>
                </div>
                <label class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy"/>
                </div>
                <label class="col-sm-3 col-form-label">Deskripsi Pelaksanaan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <a href="/input_pengadaan" class="btn btn-light">Kembali</a>
          <a href="/input_barang" type="submit" class="btn btn-primary mr-2">Selanjutnya</a>
      </form>
    </div>
  </div>
</div>

@endsection