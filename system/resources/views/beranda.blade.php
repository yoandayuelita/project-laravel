@extends('admin.base')

@section('content')
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Selamat datang Dihalaman Admin
					</div>
					<div class="card-body">
						<a href="{{url('index')}}" class="btn btn-dark float-right"><i class="fas fa-home"></i>  Halaman Pengguna</a>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection