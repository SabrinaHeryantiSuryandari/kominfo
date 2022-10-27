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

      <form action="postjadwal" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group row">

              <label for="exampleInputName1" class="col-sm-3 col-form-label">jenis pengadaan</label>
              <div class="col-sm-9">
                <select class="form-control" name="pengadaan_id">
                  <option> Pilih Pengadaan </option>
                  @foreach ($pengadaan as $item)
                  <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
                  @endforeach
                </select>
              </div>

              <label class="col-sm-3 col-form-label">Nomor</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nomor">
              </div>

              <label for="exampleInputName1" class="col-sm-3 col-form-label">Kegiatan</label>
              <div class="col-sm-9">
                <select class="form-control" name="kegiatan">
                  <option> Pilih Pengadaan </option>
                  <option>sfjhsdhfj</option>
                  <option> Pilih Pengadaan </option>
                  <option>sfjhsdhfj</option>
                  <option> Pilih Pengadaan </option>
                  <option>sfjhsdhfj</option>
                </select>
              </div>

              <label class="col-sm-3 col-form-label">Alokasi</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="alokasi">
              </div>

              <label class="col-sm-3 col-form-label">Hari </label>
              <div class="col-sm-9">
                <select class="form-control" name="hari">
                  <option> Pilih Hari </option>
                  <option> Senin </option>
                  <option> Selasa </option>
                  <option> Rabu</option>
                  <option> Kamis </option>
                  <option> Jumat</option>
                </select>
              </div>

              <label class="col-sm-3 col-form-label">Tanggal </label>
              <div class="col-sm-9">
                <input class="form-control" type="date" name="tanggal" placeholder="dd/mm/yyyy" />
              </div>

              <label class="col-sm-3 col-form-label">Deskripsi Tanggal</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="deskripsi_tgl">
              </div>

            </div>
          </div>
        </div>
        <a href="/input_pengadaan" class="btn btn-light">Kembali</a>
        <button type="submit" class="btn btn-primary mr-2">Selanjutnya</button>
        <a href="/input_barang" class="btn btn-light">NEXT</a>
      </form>
    </div>
  </div>
</div>

@endsection