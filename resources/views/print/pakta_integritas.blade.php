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
            <h2 class="card-title text-center">PAKTA INTEGRITAS</h2>
            <br>
            <p>Saya yang bertandatangan di bawah ini, dalam rangka pengadaan Belanja Alat/Bahan Kapasitas Kelembagaan Statistik Sektoral Toner Printer keperluan Dinas Komunikasi Dan Informatika Provinsi Jawa Timur pada Satuan Kerja Perangkat Daerah Dinas Komunikasi Dan Informatika Provinsi Jawa Timur Tahun Anggaran 2022, dengan ini menyatakan bahwa saya :</p>
            <br>
            <p>1. Tidak akan melakukan praktek KKN.</p>
            <p>2. Akan melaporkan kepada pihak yang berwajib/berwenang apabila mengetahui ada indikasi KKN di dalam proses pengadaan ini.</p>
            <p>3. Dalam proses pengadaan ini, berjanji akan melaksanakan tugas secara bersih, transparan, dan profesional dalam arti akan mengerahkan segala kemampuan dan sumber daya secara optimal untuk memberikan hasil kerja terbaik mulai dari penyiapan penawaran, pelaksanaan, dan penyelesaian pekerjaan/kegiatan ini.</p>
            <p>4. Apabila saya melanggar hal-hal yang telah saya nyatakan dalam PAKTA INTEGRITAS ini, saya bersedia dikenakan sanksi moral, sanksi administrasi serta dituntut ganti rugi dan pidana sesuai dengan ketentuan peraturan perundang-undangan yang berlaku. </p>
            <br>
            <p>Surabaya, 16 Agustus 2022</p>
            <br>
            <p>1.	I WAYAN RUDY ARTHA, S.Kom    	:	       Pengguna Barang/Jasa ............</p>
            <p>Pejabat Pembuat Komitmen</p>
            <p>2.   ADI KURNIAWAN.S.Kom.,M.Kom	    :	       Pejabat Pengadaan Barang/Jasa ...........</p>
            <p>3.	MANUHUTU ARMAND FX	            :	       Penyedia Barang/Jasa ..........</p>
            <p>CV. PATRIA NUGRAHA</p>
        </div>
    </div>
</div>

@endsection