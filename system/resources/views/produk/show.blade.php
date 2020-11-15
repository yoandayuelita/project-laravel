@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Produk
						<a href="{{url('admin/produk')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<p> Harga : Rp. {{$produk->harga}} |
							Berat : {{$produk->berat}} gram|
							Stok : {{$produk->stok}} </p>
						<p> Deskripsi : <br> {{$produk->deskripsi}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection