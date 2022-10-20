@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="Id Admin">
	</div>
	<div class="form-group">
		<label>UserName</label>
	<input class="form-control" type="text" name="username" placeholder="UserName">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Admin Level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="Admin Level">
	</div>
	<div class="form-group">
		<label>Nama User</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="Nama User">
	</div>
	<div class="form-group">
		<label>Status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="Status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection