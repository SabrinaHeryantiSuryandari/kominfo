@extends('layouts/index')
@section('input-data', 'active')
@section('input-data-collapse', 'collapsed')
@section('input-sudah', 'active')
@section('content')
{{-- <!-- @section('judul')
{{'Input Data / Belum Tersertifikasi'}}
@endsection -->
<!-- @section('title')
{{'Input Data yang Belum Tersertifikasi'}}
@endsection --> --}}

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

@csrf

<div class="col-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-body">
            <h4>Data Masukan Barang</h4>
            <br>
            <div class="row-fluid">
                <div class="container">
                    <form method="POST" action="postbarang" id="postbarang">
                        @csrf
                        <div class="" id="dynamic_form">
                            <div class="form-group baru-data">
                                <div class="form-row">
                                    <label for="exampleInputName1" class="col-sm-3 col-form-label">jenis pengadaan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pengadaan_id" id="pengadaan_id" placeholder="Pilih Pengadaan">
                                            {{-- <option> Pilih Pengadaan </option> --}}
                                            @foreach ($pengadaan as $item)
                                            <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Nama Barang</label>
                                        <input type="text" class="form-control" id="barang" name="barang" placeholder="Nama Barang">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Jumlah Barang</label>
                                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah Barang">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Satuan</label>
                                        <select class="form-control" id="satuan" name="satuan" placeholder="Pilih">
                                            {{-- <option>Pilih</option> --}}
                                            <option>Buah</option>
                                            <option>Pack</option>
                                            <option>Lusin</option>
                                            <option>Karton</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Harga Satuan</label>
                                        <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="1.200.000">
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>
                                    {{-- <button class="btn btn-success btn-tambah" id="addme" onclick="addCode()" ><i class="fa fa-plus"></i></button> --}}
                                    <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary document">Simpan <i class="fa fa-save"></i></button>
                    </form>                    
                </div>
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
                            <th> Nama Barang </th>
                            <th> Jumlah Barang </th>
                            <th> Satuan </th>
                            <th> Harga Satuan </th>
                            <th> Jumlah Harga </th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($asets as $aset) --}}
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
                        </tr> --}}
                        <!-- {{-- @endforeach --}} -->
                    </tbody>
                </table>
            </div>
            <br>
            <a href="/input_jadwal" class="btn btn-light">Kembali</a>
            <a href="#" type="submit" class="btn btn-primary mr-2">Selesai</a>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="dynamic-form.js"></script>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    function addForm() {
    // for (var i = 0; i < split.length; i++) {
        var addrow = '<div class="form-group baru-data">\
                        <div class="form-row">\
                            <label for="exampleInputName1" class="col-sm-3 col-form-label">jenis pengadaan</label>\
                            <div class="col-sm-9">\
                            <select class="form-control" name="pengadaan_id" placeholder="Pilih Pengadaan">\
                                <option> Pilih Pengadaan </option> \
                                @foreach ($pengadaan as $item)\
                                    <option value="{{$item->id}}">{{ $item->jenis_pengadaan }}</option>\
                                @endforeach\
                                </select>\
                            </div>\
                        </div>\
                        <div class="form-row">\
                            <div class="form-group col-md-3">\
                                <label for="inputEmail4">Nama Barang</label>\
                                <input type="text" class="form-control" id="" name="barang" placeholder="Nama Barang">\
                            </div>\
                            <div class="form-group col-md-3">\
                                <label for="inputEmail4">Jumlah Barang</label>\
                                <input type="number" class="form-control" id="" name="jumlah_barang" placeholder="Jumlah Barang">\
                            </div>\
                            <div class="form-group col-md-3">\
                                <label for="">Satuan</label>\
                                <select class="form-control" id="" name="satuan" >\
                                    <option>Pilih</option>\
                                    <option>Buah</option>\
                                    <option>Pack</option>\
                                    <option>Lusin</option>\
                                    <option>Karton</option>\
                                </select>\
                            </div>\
                            <div class="form-group col-md-3">\
                                <label for="inputPassword4">Harga Satuan</label>\
                                <input type="text" class="form-control" id="" name="harga_satuan" placeholder="1.200.000">\
                            </div>\
                        </div>\
                        <div class="button-group">\
                            <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>\
                            <button type="button" class="btn btn-danger btn-hapus"><i class="fa fa-times"></i></button>\
                        </div>\
                    </div>'
        $("#dynamic_form").append(addrow);

        // var addrow = document.getElementById('text-box');
        // addrow.innerHTML += 'Size <input value=' + split[i] + 'type="text"> Description <input type="text" name="vrow" id="price">'
    }
// }

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

<script type="text/javascript">
    $(document).on('click', '#update_btn', function () {
        $.ajax({
            type: 'POST',
            url: 'BarangController/store',
            datatype: "json",
            // datatype: form.serialize(),
            data: {
                pengadaan_id: $("#pengadaan_id").val(),
                barang: $("#barang").val(),
                jumlah_barang: $("#jumlah_barang").val(),
                satuan: $("#satuan").val(),
                harga_satuan: $("#harga_satuan").val(),
            },
            success: function (data) {
                alert(data);
                if (data == 'ADD_OK') {
                    location.reload();
                } else {
                    alert('something wrong');
                }
            }
        })
    });
</script>


{{-- <script>
    function addCode() {
        document.getElementById("addme").innerHTML +=
            "<h3>This is the text which has been inserted by JS</h3>";
    }
</> --}}

@endsection