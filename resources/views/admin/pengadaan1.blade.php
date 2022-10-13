@extends('layouts/index')

@section('content')
    @section('judul')
        {{'Input Data / Belum Tersertifikasi'}}
    @endsection
    @section('title')
        {{'Input Data yang Belum Tersertifikasi'}}
    @endsection

<div class="row">
    {{-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel 1 juta - 10 juta</h4>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif --}}
            {{-- <p class="card-description">
              Add class <code>.table-bordered</code>
            </p> --}}
            {{-- <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Progress </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>  --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
    {{-- <div class="card shadow mb-3 "> --}}
        {{-- <div class="card-header py-2 "style="background-color: #40B9CB;">
            <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
        </div> --}}
        <div class="card-body">
            <h4 class="card-title">Data Pengadaan <i class="fa-solid fa-less-than-equal "></i>  50 juta</h4>
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered" id="example" style="width:100%">
                    <thead>
                    <tr>
                        <th> NO </th>
                        <th> ID </th>
                        <th>No Sertifikat</th>
                        <th>Nama Aset</th>
                        <th>Alamat</th>
                        <th>Status Aset</th>
                        {{-- <th>Luas Aset</th> --}}
                        {{-- <th>Kondisi Aset</th>
                        <th>Kondisi Geografis</th>
                        <th>Asal Usul</th>
                        <th>Tahun Kepemilikan</th>
                        <th>Tahun Pembangunan</th>
                        <th>Tahun Rehab</th> --}}
                        <th>Keterangan</th>
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach ($asets as $aset) --}}
                        {{-- <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $aset->id}}</td>
                            <td>{{ $aset->no_sertifikat }}</td>
                            <td>{{ $aset->nama_aset }}</td>
                            <td>{{ $aset->alamat_aset }}</td>
                            <td>{{ $aset->status_aset }}</td>

                            <td>{{ $aset->keterangan_aset }}</td>
                            <td>
                                
                                <form action="{{ route('asets.destroy',$aset->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('asets.show',$aset->id) }}">Detail</a>
                                    <a class="btn btn-primary" href="{{ route('asets.edit',$aset->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr> --}}
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection