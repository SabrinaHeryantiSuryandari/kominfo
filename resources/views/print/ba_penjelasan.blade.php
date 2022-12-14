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
            <table border="0" align="center">
                <tr>
                    <td>
                        <center>
                            <font size="4"><b>DINAS KOMUNIKASI DAN INFORMATIKA</b></font><br>
                            <font size="4"><b>PROVINSI JAWA TIMUR</b></font><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>BERITA ACARA EVALUASI DOKUMEN PRAKUALIFIKASI</b>
                    </td>
                <tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="50">
                        <center>
                            <font size="2">Nomor</font>
                    </td>
                    <td>
                        <center>
                            <font size="2">:</font>
                    </td>
                    <td width="150">
                        <center>
                            <font size="2">020/654.4 /114.6/2022</font>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pada hari ini Selasa Tanggal Dua Puluh Tiga Bulan Agustus Tahun Dua Ribu Dua Puluh Dua, dimulai pukul 10.00 WIB sampai dengan selesai, Pejabat Pengadaan di Lingkungan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang dibentuk dengan Keputusan Kepala Dinas Komunikasi Dan Informatika Provinsi Jawa Timur tanggal 3 Januari 2022 Nomor : 188/19/114.1/2022, telah mengadakan rapat penjelasan untuk pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Dalam rapat penjelasan tersebut tersusun pokok acara sebagai berikut :</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">1.</td>
                    <td width="530">Pembukaan oleh Pejabat Pengadaan kepada semua yang hadir.</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">2.</td>
                    <td width="530">Penjelasan seluruh isi Dokumen Pengadaan Langsung.</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30">3.</td>
                    <td width="530">Nilai HPS/OE untuk pekerjaan ini adalah Rp. 5.688.750,-</td>
                </tr>
            </table>
            <table border="0" align="center">
                <tr>
                    <td width="30"> </td>
                    <td width="530">(Lima Juta Enam Ratus Delapan Puluh Delapan Ribu Tujuh Ratus Lima Puluh Rupiah).</td>
                </tr>
            </table>
            <table border="0" align="center" font-size="2">
                <tr>
                    <td width="560">Pokok-Pokok Penjelasan lainnya antara lain sebagai berikut :</td>
                </tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="560">
                        <center><b>DOKUMEN PENGADAAN</b>
                    </td>
                <tr>
                <tr>
                    <td width="560">
                        <center><b>BAB I  INSTRUKSI KEPADA PESERTA PENGADAAN (LKPP)</b>
                    </td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30"><b>A.</b></td>
                    <td width="530"><b>UMUM</b></td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">1. </td>
                    <td width="480">Lingkup Pekerjaan..............................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">2. </td>
                    <td width="480">Sumber Dana.......................................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">3. </td>
                    <td width="480">Peserta Pengadaan............................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">4. </td>
                    <td width="480">Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan......</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">5. </td>
                    <td width="480">Larangan Pertentangan Kepentingan..........................................................</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td width="30"><b>B.</b></td>
                    <td width="530"><b>DOKUMEN PENGADAAN</b></td>
                <tr>
            </table>
            <table border="1" align="center">
                <tr>
                    <td width="30">1. </td>
                    <td width="480">Dokumen Penawaran.......................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
                <tr>
                    <td width="30">2. </td>
                    <td width="480">Harga Penawaran..............................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
                <tr>
                    <td width="30">3. </td>
                    <td width="480">Mata Uang Penawaran dan Cara Pembayaran........................................</td>
                    <td width="50">Jelas</td>
                <tr>
                <tr>
                    <td width="30">4. </td>
                    <td width="480">Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan................</td>
                    <td width="50">Jelas</td>
                <tr>
                <tr>
                    <td width="30">5. </td>
                    <td width="480">Pakta Integritas...................................................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
                <tr>
                    <td width="30">6. </td>
                    <td width="480">Bentuk Dokumen Penawaran.........................................................................</td>
                    <td width="50">Jelas</td>
                <tr>
            </table>
             <br>
            <table border="0" align="center">
                <tr>
                    <td width="30"><b>C.</b></td>
                    <td width="530"><b>PEMASUKAN DOKUMEN PENAWARAN</b></td>
                <tr>
            </table>
        </div>
    </div>
</div>

@endsection