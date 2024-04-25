@extends('layouts.main')

@section('container')

<main class="container">
  <div class="row align-items-center">
    <div class="col-lg-7">
      <img src="img/image5.png" alt="" class="img-fluid">
    </div>
    <div class="col-lg-5">
      <div class="">
        <h1 class="mb-3 fw-normal">Selamat Datang</h1>
        <p>Selamat datang di halaman login, registrasi terlebih dahulu jika tidak memiliki akun.</p>
      </div>
      <form>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Remember me</label>
          <a href="#" class="float-end" style="text-decoration: none;">Forget Password?</a>
        </div>
        <button class="btn btn-primary w-100 mb-2" style="background-color: #003F7D; border: none;" type="submit">Sign in</button>
      </form>
      <small class="d-block text-center mt-2">Belum Terdaftar? <a style="text-decoration: none;" href="/register">Daftar Sekarang!</a></small>
    </div>
    
  </div>
</main>

@endsection
