@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID BARANG</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>ID JENIS</th>
                    <th>ID SUPLAYER</th>
                    <th>HARGA JUAL</th>
                    <th>STATUS BARANG</th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
					<tr>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->barang_kode}}</td>
						<td>{{$row->barang_nama}}</td>
						<td>{{$row->id_jenis}}</td>
						<td>{{$row->id_suplayer}}</td>
						<td>{{$row->harga_jual}}</td>
            <td>{{$row->barang_status}}</td>
						<td><a class="btn btn-primary" href="/barang/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/barang/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection