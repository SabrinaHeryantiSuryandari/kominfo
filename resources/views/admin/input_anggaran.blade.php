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
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Input Data Perusahaan</h4>
            <p class="card-description">
                Isi format dibawah ini.
            </p>
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Perusahaan">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Alamat Perusahaan"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Penanggung Jawab">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Jabatan</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Jabatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kode Rekening</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Kode Rekening">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">NPWP</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="NPWP">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Telephone</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Telephone">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <a href="/home" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>

@endsection