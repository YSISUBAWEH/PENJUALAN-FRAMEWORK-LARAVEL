@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Baraang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/admin/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" value="{{$barang->id_barang}}" name="id_barang" placeholder="ID Barang">
	</div>
	<div class="form-group">
		<label>Kode barang</label>
	<input class="form-control" type="text" value="{{$barang->barang_kode}}" name="barang_kode" placeholder="Kode barang">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" value="{{$barang->barang_nama}}" name="barang_nama" placeholder="Nama Barang">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
	<input class="form-control" type="text" value="{{$barang->id_jenis}}" name="id_jenis" placeholder="Id Jenis">
	</div>
	<div class="form-group">
		<label>Id Suplayer</label>
	<input class="form-control" type="text" value="{{$barang->id_suplayer}}" name="id_suplayer" placeholder="Id Suplayer">
	</div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" value="{{$barang->harga_jual}}" name="harga_jual" placeholder="Harga Jual">
	</div>
	<div class="form-group">
		<label>Status</label>
	<input class="form-control" type="text" value="{{$barang->barang_status}}" name="barang_status" placeholder="Status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
