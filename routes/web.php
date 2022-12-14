<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikController;

use App\Http\Controllers\PelaksanaController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BarangController;

use App\Http\Controllers\PejabatController;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('index.admin');
});

// CRUD
// route untuk input data yg telah terverifikasi
Route::get('/verified-create', function () {
    return view('admin.editpemilik');
});

// route untuk input data yg belum terverifikasi
Route::get('/create', function () {
    return view('admin.create');
});
Route::get('/tambah', function () {
    return view('admin.pemilik');
});
// Route::get('/editpemilik', function () {
//     return view('admin.editpemilik');
// });
Route::get('/lihat', function () {
    return view('admin.lihat');
});

//baru
Route::get('/pengadaan2', function () {
    return view('admin.pengadaan2');
});


Route::get('/input_anggaran', function () {
    return view('admin.input_anggaran');
});

// Route::resource('/pengaadaan', PengadaanController::class);
// Route::get('/input_pengadaan', function () {
//     return view('admin.inputpengadaan');
// });

//untuk 
Route::get('/input_pengadaan', [PelaksanaController::class, 'index']);
Route::get('/input_pelaksana', [PelaksanaController::class, 'create']);
Route::post('/postdata', [PelaksanaController::class, 'store']);
// Route::post('/inputpelaksana'. PelaksanaController::class);
Route::post('/postpengadaan', [PengadaanController::class, 'store']);

Route::get('/input_jadwal', [JadwalController::class, 'index']);
Route::post('/postjadwal', [JadwalController::class, 'store']);

Route::get('/input_barang', [BarangController::class, 'index']);
Route::post('/postbarang', [BarangController::class, 'store']);

Route::resource('/barang', BarangController::class);

// Route::get('/input_pengadaan', [PengadaanController::class, 'index']);
Route::resource('/pengadaan', PengadaanController::class);
// Route::resource('/pengadaan2', PengadaanController::class);

Route::get('/pengadaan1', [PengadaanController::class, 'index1']);
Route::get('/pengadaan2', [PengadaanController::class, 'index2']);

//pejabat
Route::get('/pejabat', [PejabatController::class, 'index']);



// Route::get('/input_jadwal', function () {
//     return view('admin.input_jadwal');
// });

// Route::get('/input_barang', function () {
//     return view('admin.input_barang');
// });
// Route::resource('/pelaksanas', PelaksanaController::class);
// Route::get('/input_pelaksana', function () {
//     return view('admin.input_pelaksana');
// });

Route::get('/setting', function () {
    return view('admin.setting');
});
//


Auth::routes();
Auth::routes(['verify' => false]);
// Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [view::class, 'index']);
Route::get('/masuk', [view::class, 'login']);
Route::post('/save', [view::class, 'save']);
// Route::delete('/admin/{id}',[view::class, 'delete']);
// Route::delete('/admin/{id}', 'view@destroy')->name('admin.destroy');
// Route::get('admin/hapus/{id}', 'view@hapus');
Route::get('admin/hapus/{id}', [view::class, 'hapus']);

Route::get('/guest', [GuestController::class, 'index'])->name('guest');

Route::get('/pengguna', [view::class, 'pengguna'])->name('pengguna');
// Route::dele('/delete',[view::class, 'destroy']);
// Route::delete('/pengguna/{id}', 'view@destroy')->name('pengguna.destroy');

//tambahkan kode berikut
// Route::resource('/asets', PemilikController::class);

Route::resource('/delete', view::class);

Route::resource('/pemilik', PemilikController::class);
// Route::resource('/pengguna', View::class);
// Route::resource('/save', App\Http\Controllers\view::class,'save');

//print
Route::get('/nota_dinas1', function () {
    return view('print.nota_dinas1');
});
Route::get('/nota_dinas2', function () {
    return view('print.nota_dinas2');
});
Route::get('/undangan_persiapan', function () {
    return view('print.undangan_persiapan');
});
Route::get('/pakta_integritas', function () {
    return view('print.pakta_integritas');
});
Route::get('/daftar_hadir', function () {
    return view('print.daftar_hadir');
});
Route::get('/ba_evaluasi', function () {
    return view('print.ba_evaluasi');
});
Route::get('/dok_prakualifikasi', function () {
    return view('print.dok_prakualifikasi');
});
Route::get('/undangan_permintaan', function () {
    return view('print.undangan_permintaan');
});
Route::get('/ba_penjelasan', function () {
    return view('print.ba_penjelasan');
});
// Route::resource('/getusr',[App\Http\Controllers\AdminController::class, 'index']);