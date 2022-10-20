@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/admin/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID ADMIN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>LEVEL</th>
                    <th>NAMA ADMIN</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $row)
					<tr>
						<td>{{$row->id_admin}}</td>
						<td>{{$row->username}}</td>
						<td>{{$row->password}}</td>
						<td>{{$row->admin_level}}</td>
						<td>{{$row->admin_nama}}</td>
						<td>{{$row->admin_status}}</td>
						<td><a class="btn btn-primary" href="/admin/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/admin/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection