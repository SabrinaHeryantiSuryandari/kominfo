@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
{{-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->

<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --}}

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
            <h4 class="card-title">Input Data Pelaksana</h4>
            <form action="{{ route('pelaksanas.store') }}" method="POST">
                @csrf
                <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama CV Pelaksana</label>
                            <input class="form-control" type="text" name="pt_pelaksana" value="{{ old('pt_pelaksana') }}" placeholder="CV Pelaksana">
                            <small class="text-danger">{{ $errors->first('pt_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Alamat</label>
                            <textarea class="form-control" name="alamat" value="{{ old('alamat') }}" rows="4" placeholder="Alamat"></textarea>
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Penanggung Jawab Pelaksana</label>
                            <input class="form-control" type="text" name="nama_pelaksana" value="{{ old('nama_pelaksana') }}" placeholder="Nama Pelaksana">
                            <small class="text-danger">{{ $errors->first('nama_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Jabatan Penanggung Jawab Pelaksana</label>
                            <input class="form-control" type="text" name="jabatan_pelaksana" value="{{ old('jabatan_pelaksana') }}" placeholder="Jabatan Pelaksana">
                            <small class="text-danger">{{ $errors->first('jabatan_pelaksana') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Kode Rekening</label>
                            <input class="form-control" id="text" name="kode_rekening" value="{{ old('kode_rekening') }}" placeholder="Kode Rekening">
                            <small class="text-danger">{{ $errors->first('kode_rekening') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">NPWP</label>
                            <input class="form-control" id="text" name="npwp" value="{{ old('npwp') }}" placeholder="NPWP">
                            <small class="text-danger">{{ $errors->first('npwp') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Telephone</label>
                            <input class="form-control" type="text" name="tlp" value="{{ old('tlp') }}" placeholder="Telepon">
                            <small class="text-danger">{{ $errors->first('tlp') }}</small>
                        </div>
                    </div>
                </table>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <div class="form-group text-center">
                        <tr>
                            <td>
                                <br>
                                <button type="submit" class="btn btn-success text-center">Submit</button>
                                <a href="/home" class="btn btn-light text-center">Kembali</a>
                            </td>
                        </tr>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection