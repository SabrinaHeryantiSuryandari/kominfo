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

        <!-- <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Masukan Pengadaan</h4>
        <p class="card-description">
          SK Pejabat Pengadaan
        </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputTanggal">Tanggal</label>
            <input type="text" class="form-control" id="exampleInputTanggal" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNomor">Nomor</label>
            <input type="text" class="form-control" id="exampleInputNomor" placeholder="">
          </div>
        </form>
        <p class="card-description">
          SK Pejabat Pemeriksa Administratif
        </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputTanggal">Tanggal</label>
            <input type="text" class="form-control" id="exampleInputTanggal" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNomor">Nomor</label>
            <input type="text" class="form-control" id="exampleInputNomor" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Nama</label>
            <input type="text" class="form-control" id="exampleInputNama" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNIP">NIP</label>
            <input type="text" class="form-control" id="exampleInputNIP" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNoBA">No. BA Hasil Pem. Adm.</label>
            <input type="text" class="form-control" id="exampleInputNoBA" placeholder="">
          </div>
        </form>
        <p class="card-description">
          Bidang Pengelolaan
        </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleSelectProgram">Program</label>
            <select class="form-control" id="exampleSelectProgram">
              <option>Penyelenggaraan Statistik Sektoral</option>
              <option>Penyelenggaraan Statistik Sektoral</option>
              <option>Penyelenggaraan Statistik Sektoral</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputKegiatan">Kegiatan</label>
            <input type="text" class="form-control" id="exampleInputKegiatan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleSubKegiatan">Sub Kegiatan</label>
            <textarea class="form-control" id="exampleSubKegiatan" rows="4"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPekerjaan">Pekerjaan</label>
            <input type="email" class="form-control" id="exampleInputPekerjaan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputKodeRekening">Kode Rekening</label>
            <input type="password" class="form-control" id="exampleInputKodeRekening" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleUraianBelanja">Uraian Belanja</label>
            <textarea class="form-control" id="exampleUraianBelanja" rows="4"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputSumberDana">Sumber Dana</label>
            <input type="password" class="form-control" id="exampleInputSumberDana" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputTanggalPelaksanaan">Tanggal Pelaksanaan</label>
            <input type="text" class="form-control" id="exampleInputTanggalPelaksanaan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputBatasWaktuPenyelesaian">Batas Waktu Penyelesaian</label>
            <input type="text" class="form-control" id="exampleInputBatasWaktuPenyelesaian" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputJkWaktuPengerjaan">Jk Waktu Pengerjaan</label>
            <input type="text" class="form-control" id="exampleInputJkWaktuPengerjaan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputTglmulaipekerjaan">Tgl Mulai Pekerjaan</label>
            <input type="email" class="form-control" id="exampleInputTglmulaipekerjaan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputTempat">Tempat</label>
            <input type="email" class="form-control" id="exampleInputTempat" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputKota">Kota</label>
            <input type="email" class="form-control" id="exampleInputKota" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPelaksana">Pelaksana</label>
            <input type="email" class="form-control" id="exampleInputPelaksana" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputAlamat">Alamat</label>
            <input type="email" class="form-control" id="exampleInputAlamat" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputYangTTD">Yang TTD</label>
            <input type="email" class="form-control" id="exampleInputYangTTD" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputJabatan">Jabatan</label>
            <input type="email" class="form-control" id="exampleInputJabatan" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNPWP">NPWP</label>
            <input type="email" class="form-control" id="exampleInputNPWP" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputNo.Tlpn">No.Tlpn</label>
            <input type="email" class="form-control" id="exampleInputNo.Tlpn" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputFax">Fax</label>
            <input type="email" class="form-control" id="exampleInputFax" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="">
          </div>
          <p class="card-description">
            Surat Penawaran
          </p>
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputNo.Surat">No.Surat</label>
              <input type="text" class="form-control" id="exampleInputNo.Surat" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputJkWaktuPekerjaan">Jk Waktu Pekerjaan</label>
              <input type="text" class="form-control" id="exampleInputJkWaktuPekerjaan" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputJkWaktuPenawaran">Jk Waktu Penawaran</label>
              <input type="text" class="form-control" id="exampleInputJkWaktuPenawaran" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputNo.Kwitansi">No.Kwitansi</label>
              <input type="text" class="form-control" id="exampleInputNo.Kwitansi" placeholder="">
            </div>
          </form>
          <button type="submit" class="btn btn-primary mr-2">Simpan</button>
          <button class="btn btn-light">Batal</button>
        </form>
      </div>
    </div>
  </div> -->


        <div class="row">
          <div class="col-12">
            <ul class="">
              <li>
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
          </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        <a href="/home" class="btn btn-light">Batal</>
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