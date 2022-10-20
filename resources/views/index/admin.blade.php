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
    <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <h4 class="mb-4 pt-2">Input Pelaksana</h4>
                <!-- {{-- <p class="fs-30 mb-2">Input Anggaran</p><br> --}}
                {{-- <p>22.00% (30 days)</p> --}} -->
                <div class="pt-2">
                    <a href="/pelaksanas" type="button" class="btn btn-outline-danger" style="color: white; border-color: white">
                        <i class="ti-upload btn-icon-prepend"></i>
                        Input Pelaksana
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col grid-margin stretch-card">
        <div class="card">
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

<!-- Content Row -->
@endsection


<div class="row">

    <!-- Area Chart -->
    <!-- {{-- <div class="card shadow mb-4  text-center my-3 col-12">
        <div class="card-header text-white" style="background-color: #40B9CB;">
            Index Aset Terdata
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
        <div class="card-footer text-white" style="background-color: #40B9CB;">
            2 days ago
        </div>
    </div> --}} -->

</div>