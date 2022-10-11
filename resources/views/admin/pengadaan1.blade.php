@extends('layouts/index')

@section('content')
    @section('judul')
        {{'Input Data / Belum Tersertifikasi'}}
    @endsection
    @section('title')
        {{'Input Data yang Belum Tersertifikasi'}}
    @endsection

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel 1 juta - 10 juta</h4>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            {{-- <p class="card-description">
              Add class <code>.table-bordered</code>
            </p> --}}
            <div class="table-responsive pt-3">
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
    </div>
</div>
@endsection