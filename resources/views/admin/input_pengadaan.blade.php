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
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
=======
<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Input Data Pengadaan Baru</h4>
            <form action="" method="POST">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Nomor Nota Dinas</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="No. Nota Dinas">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail3">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Perihal</label>
                    <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Perihal">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">No. Rek</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nomor Rekening">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Jenis Pengadaan</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Jenis Pengadaan">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">List Barang Pengadaan</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Barang Pengadaan"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Penyedia Barang & Jasa</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Penyedia Barang & Jasa">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Penyedia Barang & Jasa</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Penyedia Barang & Jasa">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
<<<<<<< HEAD
              </div>
            </div>
</form>
=======
                <div class="form-group">
                    <label for="exampleInputCity1">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div> -->
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/home" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
>>>>>>> 905bc647648e97d222fa5b99c507b35854a29df8

@endsection