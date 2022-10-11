@extends('layouts/index')
@section('content')
    @section('title')
        {{'halaman admin'}}
    @endsection
    @section('judul')
        {{'Dashboard'}}
    @endsection
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fa-duotone fa-circle-caret-right"></i> --}}
                        {{-- <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7 </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>         
    </div> --}}

    <div class="row">
        <div class="col grid-margin stretch-card">
            <div class="card">
              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
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
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    {{-- <div class="card shadow mb-4  text-center my-3 col-12">
        <div class="card-header text-white" style="background-color: #40B9CB;">
            Index Aset Terdata
        </div>
        <canvas id="myChart" width="400" height="100"></canvas>
        <div class="card-footer text-white" style="background-color: #40B9CB;">
            2 days ago
        </div>
    </div> --}}

</div>

                    
@endsection