@extends('layouts.main')

@section('container')
	<main class="container">
		{{-- alert --}}
		<div class="mt-5">
			@if ($errors->any())
				<div class="col-12">
					@foreach ($errors->all() as $error)
						<div class="alert alert-danger">{{ $error }}</div>
					@endforeach
				</div>
			@endif

			@if (session()->has('error'))
				<div class="alert alert-danger">{{ session('error') }}</div>
			@endif

			@if (session()->has('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif
		</div>
		{{-- !!alert!! --}}

		<div class="row align-items-center">
			<div class="col-lg-7">
				<img src="img/image5.png" alt="" class="img-fluid">
			</div>
			<div class="col-lg-5">
				<div class="row">
					<h1 class="mb-3 fw-normal">Lupa Password</h1>
					<p>Kami akan mengirimkan link ke email Anda, gunakan link tersebut untuk mengganti password.</p>
				</div>
				<form action="{{ route('forget.password.post') }}" method="post">
					@csrf
					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
						<label for="floatingInput">Email address</label>
					</div>
					<button class="btn btn-primary w-100 mb-2" style="background-color: #003F7D; border: none;"
						type="submit">Kirim</button>
				</form>
			</div>
		</div>
	</main>
@endsection
