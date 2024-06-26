@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register">
        <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
              <label for="name">Nama</label>
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}" required>
              <label for="Username">Username</label>
              @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
              <label for="email">Email </label>
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
          </form>
          <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login sekarang!</a></small>
        </main>
    </div>
</div>
@endsection