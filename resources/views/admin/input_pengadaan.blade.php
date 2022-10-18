@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
<!-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->
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
      <h4 class="card-title">Data Masukan Pengadaan</h4>

      <form>
        @csrf
        <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pelaksana/Nama Perusahaan</label>
                <div class="col-sm-9">
                  <select class="form-control">
                    <option>Category1</option>
                    <option>Category2</option>
                    <option>Category3</option>
                    <option>Category4</option>
                  </select>
                </div>
                <label class="col-sm-3 col-form-label">Hari</label>
                <div class="col-sm-9">
                  <select class="form-control">
                  {{--  nnti di masukin db  --}}
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                    <option>Kamis</option>
                    <option>Jumat</option>
                    <option>Sabtu</option>
                    <option>Minggu</option>
                  </select>
                </div>
                <label class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy"/>
                </div>
                <label class="col-sm-3 col-form-label">Deskripsi Pelaksanaan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <a href="/home" class="btn btn-light">Batal</a>
          <a href="/input_jadwal" type="submit" class="btn btn-primary mr-2">Selanjutnya</a>
{{--  <div class="row">
          <div class="col-12">
            <ul class="">
              <li>
              <div class="collapsible">Pelaksana</div>
                <div class="content">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal</label>
                      <input placeholder="GDA" id="gda" value="" type="date" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nomor</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                </div>

                <div class="collapsible">SK Pejabat Pengadaan</div>
                <div class="content">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal</label>
                      <input placeholder="GDA" id="gda" value="" type="date" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nomor</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                </div>

                <div class="collapsible">SK Pejabat Pemeriksa Administratif</div>
                <div class="content">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal</label>
                      <input placeholder="GDA" id="gda" value="" type="date" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nomor</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nama</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">NIP</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">No. BA Hasil Pem. Adm.</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                </div>

                <div class="collapsible">Bidang Pengelolaan</div>
                <div class="content">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Program</label>
                      <input placeholder="GDA" id="gda" value="" type="date" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Kegiatan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Sub Kegiatan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Pekerjaan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Kode Rekening</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Uraian Belanja</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Sumber Dana</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal Pelaksanaan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Batas Waktu Penyelesaian</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Jangka Waktu Pengerjaan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal Mulai Penkerjaan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tempat</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Kota</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Pelaksana</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Alamat</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Yang TTD</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Jabatan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Jabatan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">NPWP</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nomor Telepon</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Fax</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Email</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>


                </div>

                <div class="collapsible">Surat Penawaran</div>
                <div class="content">
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Tanggal</label>
                      <input placeholder="GDA" id="gda" value="" type="date" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Nomor Surat</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Jangka Waktu Pekerjaan</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">Jangka Waktu Penawaran</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <label class="active" for="gda">No. Kwitansi</label>
                      <input placeholder="GDA" id="gda" value="" type="text" name="gda" class="input validate ">
                      <span class="error error_gda"></span>
                    </div>
                  </div>
                </div>

              </li>
            </ul>
          </div>  --}}
      </form>
    </div>
  </div>
</div>

@endsection

<style>
  li {
    list-style-type: none;
  }

  .collapsible {
    background-color: #ffffff;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
  }

  form .input:hover {
    color: darkgrey;
    background-color: white;
    transition: 0.3s;
  }

  form .input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    background-color: #e8e8e8;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;
  }

  form .inputselect:hover {
    color: darkgrey;
    background-color: white;
    transition: 0.3s;
  }

  form .inputselect {
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    background-color: #e8e8e8;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;
    -webkit-appearance: none;
    -moz-appearance: none;
    content: "▼";
    font-family: "Roboto", sans-serif;
    outline: 0;
    color: grey;
    background: #ffffff;
    width: 100%;
    border: 0;
    margin: 0 0 5px;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 3px;
    transition: 0.3s;

    background-image:
      linear-gradient(45deg, transparent 50%, grey 50%),
      linear-gradient(135deg, grey 50%, transparent 50%);

    background-position:
      calc(100% - 20px) calc(1em + 8px),
      calc(100% - 15px) calc(1em + 8px),
      100% 0;
    background-size:
      5px 5px,
      5px 5px,
      2.5em 2.5em;
    background-repeat: no-repeat;
  }

  .content {
    padding: 1rem;
    /* padding: 0 18px; */
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
  }
</style>

<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
</script>