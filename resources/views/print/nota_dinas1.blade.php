@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
@section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection
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

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title text-center">DINAS KOMUNIKASI DAN INFORMATIKA</h2>
            <h2 class="card-title text-center">PROVINSI JAWA TIMUR</h2>
            <h2 class="card-title text-center">NOTA DINAS</h2>
            <br>
            <p>Kepada   : Yth. Sdr. Pejabat Pembuat Komitmen Dinas Komunikasi dan Informatika Provinsi Jawa Timur</p>
            <p>D a r i  : Kuasa Pengguna Anggaran</p>
            <p>Tanggal  : 11 Agustus 2022</p>
            <p>Nomor    : 020/654.1/114.6/2022</p>
            <p>Sifat    : Segera</p>
            <p>Lampiran : 1 (satu) berkas</p>
            <p>Perihal  : Pemrosesan Administrasi Pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</p>
            <br>
            <p>     Bersama ini ini diberitahukan, bahwa DPA-SKPD Bagian Data dan Statistik pada Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, kode rekening 2.20.02.1.01.5.1.02.01.01.0029 pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dengan rincian sebagai berikut :</p>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Belanja Alat/Bahan Untuk Kegiatan Kantor </th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Toner Printer Tinta Printer Epson L-1300</td>
                        <td>2</td>
                        <td>Buah</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Toner Printer Tinta Printer Epson L-1800</td>
                        <td>1</td>
                        <td>Buah</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Toner Printer Tinta Printer Epson L-6160</td>
                        <td>1</td>
                        <td>Buah</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>     Untuk itu diminta bantuannya untuk segera diproses sesuai prosedur yang berlaku.</p>
            <p>     Demikian untuk pelaksanaannya.</p>
            <p>KUASA PENGGUNA ANGGARAN</p>
            <br>
            <br>
            <br>
            <p>Dra. Ec. NIRMALA DEWI, M.M</p>
            <p>NIP. 19650909 199403 2 006</p>
        </div>
    </div>
</div>

@endsection