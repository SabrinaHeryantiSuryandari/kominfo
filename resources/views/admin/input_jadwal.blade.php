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
@endsection

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
      <h4>Input Jadwal</h4>
      <br>
      <div class="row-fluid">
        <div class="container">
          <form method="POST" action="{{ route('jadwals.store') }}">
            <div class="" id="dynamic_form">
              <div class="form-group baru-data">
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="">Pelaksana</label>
                    <select class="form-control" name="pengadaan_id" value="{{ old('pengadaan_id') }}">
                      <option>Pilih</option>
                      <option>Buah</option>
                      <option>Pack</option>
                      <option>Lusin</option>
                      <option>Karton</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('pengadaan_id') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="">Kegiatan</label>
                    <select class="form-control" name="kegiatan" value="{{ old('kegiatan') }}">
                      <option>Pilih</option>
                      <option>Buah</option>
                      <option>Pack</option>
                      <option>Lusin</option>
                      <option>Karton</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('kegiatan') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Alokasi</label>
                    <input type="number" class="form-control" name="alokasi" value="{{ old('alokasi') }}" placeholder="1">
                    <small class="text-danger">{{ $errors->first('alokasi') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Hari</label>
                    <input type="number" class="form-control" name="hari" value="{{ old('hari') }}" placeholder="1">
                    <small class="text-danger">{{ $errors->first('hari') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal">
                    <small class="text-danger">{{ $errors->first('tanggal') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPassword4">Deskripsi Tanggal</label>
                    <input type="text" class="form-control" name="deskripsi_tgl" value="{{ old('deskripsi_tgl') }}" placeholder="Deskripsi Pelaksanaan">
                    <small class="text-danger">{{ $errors->first('deskripsi_tgl') }}</small>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputEmail4">Nomor</label>
                    <input type="text" class="form-control" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor Surat">
                    <small class="text-danger">{{ $errors->first('nomor') }}</small>
                  </div>
                </div>
                <div class="button-group">
                  <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>
                  <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-simpan">Simpan <i class="fa fa-save"></i></button>
          </form>
        </div>
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="dynamic-form.js"></script>
      </div>
    </div>
  </div>
</div>

<div class="col-12 grid-margin stretch-card">
  <div class="card shadow">
    <div class="card-body">
      <div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered" id="example" style="width:100%">
          <thead>
            <tr>
              <th> Kegiatan </th>
              <th> Alokasi </th>
              <th> Tanggal </th>
              <th> Deskripsi Tanggal </th>
              <th> Nomor </th>
              <th width="280px">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- {{-- @foreach ($asets as $aset) --}}
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
                            </tr> --}} -->
            <!-- {{-- @endforeach --}} -->
          </tbody>
        </table>
      </div>
      <br>
      <a href="/input_pengadaan" class="btn btn-light">Kembali</a>
      <a href="/input_barang" type="submit" class="btn btn-primary mr-2">Selanjutnya</a>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
  function addForm() {
    var addrow = '<div class="form-group baru-data">\
                    <div class="form-row">\
                      <div class="form-group col-md-3">\
                        <label for="">Kegiatan</label>\
                        <select class="form-control" id="">\
                          <option>Pilih</option>\
                          <option>Buah</option>\
                          <option>Pack</option>\
                          <option>Lusin</option>\
                          <option>Karton</option>\
                        </select>\
                      </div>\
                      <div class="form-group col-md-2">\
                        <label for="inputPassword4">Alokasi</label>\
                        <input type="number" class="form-control" id="" placeholder="1">\
                      </div>\
                      <div class="form-group col-md-2">\
                        <label for="inputPassword4">Tanggal</label>\
                        <input type="date" class="form-control" id="" placeholder="Tanggal">\
                      </div>\
                      <div class="form-group col-md-3">\
                        <label for="inputPassword4">Deskripsi Tanggal</label>\
                        <input type="text" class="form-control" id="" placeholder="Deskripsi Pelaksanaan">\
                      </div>\
                      <div class="form-group col-md-2">\
                        <label for="inputEmail4">Nomor</label>\
                        <input type="text" class="form-control" id="" placeholder="Nomor Surat">\
                      </div>\
                  </div>\
                  <div class="button-group">\
                      <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>\
                      <button type="button" class="btn btn-danger btn-hapus"><i class="fa fa-times"></i></button>\
                  </div>\
                  </div>'
    $("#dynamic_form").append(addrow);
  }

  $("#dynamic_form").on("click", ".btn-tambah", function() {
    addForm()
    $(this).css("display", "none")
    var valtes = $(this).parent().find(".btn-hapus").css("display", "");
  })

  $("#dynamic_form").on("click", ".btn-hapus", function() {
    $(this).parent().parent('.baru-data').remove();
    var bykrow = $(".baru-data").length;
    if (bykrow == 1) {
      $(".btn-hapus").css("display", "none")
      $(".btn-tambah").css("display", "");
    } else {
      $('.baru-data').last().find('.btn-tambah').css("display", "");
    }
  });

  $('.btn-simpan').on('click', function() {
    $('#dynamic_form').find('input[type="text"], input[type="number"], select, textarea').each(function() {
      if ($(this).val() == "") {
        event.preventDefault()
        $(this).css('border-color', 'red');

        $(this).on('focus', function() {
          $(this).css('border-color', '#ccc');
        });
      }
    })
  })
</script>

@endsection