@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data Produk
						<a href="{{url('admin/produk/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>NO</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/produk', $produk->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection