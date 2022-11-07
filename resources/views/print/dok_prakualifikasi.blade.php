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
            <br>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="100">DAFTAR</td>
                    <td width="10">:</td>
                    <td width="850">Evaluasi Dokumen Prakualifikasi</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="100">PEKERJAAN</td>
                    <td width="10">:</td>
                    <td width="850">Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="100">KEPERLUAN</td>
                    <td width="10">:</td>
                    <td width="850">Dinas Komunikasi Dan Informatika Provinsi Jawa Timur</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="100">TANGGAL</td>
                    <td width="10">:</td>
                    <td width="850">18 Agustus 2022</td>
                </tr>
            </table>
            <br>
            <table width="960px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">No</th>
                        <th width="150px" scope="col">Nama Perusahaan</th>
                        <th width="70px" scope="col">Surat Pernyataan Minat</th>
                        <th width="70px" scope="col">Pakta Integritas</th>
                        <th width="560px" scope="col">Formulir Isian Penilaian Kualifikasi</th>
                        <th width="70px" scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  <tr>
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
                    </tr>  --}}
                </tbody>
                <table width="960px" border="1" align="center">
                <thead>
                    <tr align="center" font-size="">
                        <th width="30px" scope="col"> </th>
                        <th width="155px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col">Data Administrasi</th>
                        <th width="70px" scope="col">Ijin Usaha</th>
                        <th width="70px" scope="col">Landasan Hukum Pendirian BU</th>
                        <th width="70px" scope="col">Pengurus</th>
                        <th width="280px" scope="col">Pajak</th>
                        <th width="70px" scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    {{--  <tr>
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
                    </tr>  --}}
                </tbody>
            </table>
            </table>
            <table width="960px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="70px" scope="col"> </th>
                        <th width="30px" scope="col"> </th>
                        <th width="150px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col"> </th>
                        <th width="70px" scope="col">NPWP dan PKP</th>
                        <th width="70px" scope="col">Bukti Pelunasan Pajak Tahun Terakhir</th>
                        <th width="70px" scope="col">Laporan Bulanan PPh/PPN 3 Bulan Terakhir</th>
                        <th width="70px" scope="col">Data Pengalaman Kerja</th>
                        <th width="70px" scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  <tr>
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
                    </tr>  --}}
                </tbody>
            </table>
            <table width="960px" border="1" align="center">
                <thead>
                    <tr align="center">
                        <th width="30px" scope="col">1</th>
                        <th width="150px" scope="col">2</th>
                        <th width="70px" scope="col">3</th>
                        <th width="70px" scope="col">4</th>
                        <th width="70px" scope="col">5</th>
                        <th width="70px" scope="col">6</th>
                        <th width="70px" scope="col">7</th>
                        <th width="70px" scope="col">8</th>
                        <th width="70px" scope="col">9</th>
                        <th width="70px" scope="col">10</th>
                        <th width="70px" scope="col">11</th>
                        <th width="70px" scope="col">12</th>
                        <th width="70px" scope="col">13</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  <tr>
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
                    </tr>  --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection