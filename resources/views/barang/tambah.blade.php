@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" name="id_barang" placeholder="Id Barang">
	</div>
	<div class="form-group">
		<label>Kode Barang</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Kode Barang">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Nama Barang">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
		<select class="form-control" name="id_jenis">
			<option>Silahkan dipilih</option>
			@foreach($jenis as $row)
			<option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Id Suplaayer</label>
		<select class="form-control" name="id_suplayer">
			<option>Silahkan dipilih</option>
			@foreach($suplayer as $row)
			<option value="{{$row->id_suplayer}}">{{$row->suplayer_nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual">
	</div>
	<div class="form-group">
		<label>Status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection