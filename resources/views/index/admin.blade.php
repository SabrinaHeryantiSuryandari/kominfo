@extends('layouts/index')
@section('content')
@section('title')
{{'halaman admin'}}
@endsection
@section('judul')
{{'Dashboard'}}
@endsection
<!-- Content Row -->

<div class="row ">
    <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <h4 class="mb-4 pt-2">Input Pelaksana</h4>
                <!-- {{-- <p class="fs-30 mb-2">Input Anggaran</p><br> --}}
                {{-- <p>22.00% (30 days)</p> --}} -->
                <div class="pt-2">
                    <a href="/input_pelaksana" type="button" class="btn btn-outline-danger" style="color: white; border-color: white">
                        <i class="ti-upload btn-icon-prepend"></i>
                        Input Pelaksana
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
            <div class="card-body">
                <h4 class="mb-4 pt-2 ">Input Pengadaan</h4>
                <!-- {{-- <p class="fs-30 mb-2">Input Pengadaan</p><br> --}}
                {{-- <p>22.00% (30 days)</p> --}} -->
                <div class="pt-2 ">
                    <!-- {{-- <a href="/input_pengadaan" type="button" class="btn btn-danger btn-icon-text  "> --}} -->
                    <a href="/input_pengadaan" type="button" class="btn btn-outline-danger" style="color: white; border-color: white">
                        <i class="ti-upload btn-icon-prepend"></i>
                        Input Pengadaan
                        <!-- {{-- <i class="menu-arrow"></i> --}} -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow">
            <!-- {{-- <div class="card shadow mb-3 "> --}}
            {{-- <div class="card-header py-2 "style="background-color: #40B9CB;">
                <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
            </div> --}} -->
            <div class="card-body">
                <h4 class="card-title">Daftar Pejabat</h4>
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
                        Edit Data Pejabat
                    </button>
                </div>
                <div class="table-responsive pt-3 pb-2">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <table class="table table-bordered" id="example" style="width:100%">
                        <thead>
                            <tr>
                                <th> Jenis Pejabat </th>
                                <th> Nama Pejabat </th>
                                <th> NIP Pejabat </th>
                                <!-- <th> Kuasa Pengguna </th>
                                <th> NIP Kuasa Pengguna </th>
                                <th> Kuasa Pengguna </th>
                                <th> NIP Kuasa Pengguna </th>
                                <th> Kuasa Pengguna </th>
                                <th> NIP Kuasa Pengguna </th>
                                <th> Kuasa Pengguna </th>
                                <th> NIP Kuasa Pengguna </th> -->
                                <!-- <th width="280px">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pejabat as $pjb)
                            <tr>
                                <td>Kuasa Pengguna Anggaran</td>
                                <td>{{ $pjb->kuasa_pengguna_anggaran }}</td>
                                <td>{{ $pjb->nip_kuasa_pengguna }}</td>
                                {{-- <td>{{ $pjb->kuasa_pengguna_anggaran }}</td>
                                <td>{{ $pjb->nip_kuasa_pengguna }}</td>
                                <td>{{ $pjb->pejabat_pembuatan_komitmen }}</td>
                                <td>{{ $pjb->nip_pejabat_komitmen }}</td>
                                <td>{{ $pjb->pejabat_pengadaan }}</td>
                                <td>{{ $pjb->nip_pejabat_pengadaan }}</td>
                                <td>{{ $pjb->bpp }}</td>
                                <td>{{ $pjb->nip_bpp }}</td> --}}
                            </tr>
                            <tr>
                                <td>Pejabat Pembuat Komitmen</td>
                                <td>{{ $pjb->pejabat_pembuatan_komitmen }}</td>
                                <td>{{ $pjb->nip_pejabat_komitmen }}</td>
                            </tr>
                            <tr>
                                <td>Pejabat Pengadaan</td>
                                <td>{{ $pjb->pejabat_pengadaan }}</td>
                                <td>{{ $pjb->nip_pejabat_kpengadaan }}</td>
                            </tr>
                            <tr>
                                <td>BPP</td>
                                <td>{{ $pjb->bpp }}</td>
                                <td>{{ $pjb->nip_bpp }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- {{-- 
<div class="card-body">
    <a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
    <br/>
    <br/>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelaksanas as $p)
            <tr>
                <td>{{ $p->pt_pelaksana }}</td>
                <td>{{ $p->nama }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}} -->

<div class="row">
    <div class="col grid-margin stretch-card">
        <div class="card shadow">
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="card-title">Sales Report</p>
                    <a href="#" class="text-info">View all</a>
                </div>
                <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                <div id="sales-legend" class="chartjs-legend mt-4 mb-2">
                    <ul class="1-legend">
                        <li>
                            <span style="background-color: rgb(152, 189, 255);"></span>Offline Sales
                        </li>
                        <li>
                            <span style="background-color: rgb(75, 73, 172);"></span>Online Sales
                        </li>
                    </ul>
                </div>
                {{-- tempalte1/js/dashboard.js --}}
                <canvas id="sales-chart" width="441" height="220" style="display: block; height: 147px; width: 294px;" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Data Pejabat</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form>
<<<<<<< HEAD
                {{-- <form action="{{ route('pejabat.update', $pejabat->id)}}"> --}}
                    @csrf

                    <label for="recipient-name" class="col-form-label">Kuasa Pengguna Anggaran</label>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="recipient-name" name="" placeholder="Nama Kuasa Pengguna Anggaran">
=======
                    @csrf
                    <div class="mb-4">
                        <label for="recipient-name" class="col-form-label">Kuasa Pengguna Anggaran</label>
                        <input type="text" class="form-control" id="recipient-name" name="kuasa_pengguna_anggaran" value="">
>>>>>>> 629cef5447535775edc2357e05a5328c95f48a44
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">NIP Kuasa Pengguna Anggaran</label>
                        <input type="number" class="form-control" id="recipient-name" name="nip_kuasa_pengguna" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Pejabat Pembuat Komitmen</label>
                        <input type="text" class="form-control" id="recipient-name" name="pejabat_pembuatan_komitmen" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">NIP Pejabat Pembuat Komitmen</label>
                        <input type="number" class="form-control" id="recipient-name" name="nip_pejabat_komitmen" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">Pejabat Pengadaan</label>
                        <input type="text" class="form-control" id="recipient-name" name="pejabat_pengadaan" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">NIP Pejabat Pengadaan</label>
                        <input type="number" class="form-control" id="recipient-name" name="nip_pejabat_kpengadaan" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">BPP</label>
                        <input type="text" class="form-control" id="recipient-name" name="bpp" value="">
                    </div>
                    <div class="mb-4">
                        <label for="message-text" class="col-form-label">NIP BPP</label>
                        <input type="number" class="form-control" id="recipient-name" name="nip_bpp" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Oke</button>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
@endsection