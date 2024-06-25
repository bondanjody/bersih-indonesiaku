@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <!-- Jika pengguna telah login -->
        @auth
            <p>Silahkan isi data berikut !</p>
        @endauth

        <!-- Jika pengguna belum login -->
        @guest
            <p>Selamat datang di halaman Cuan! Dimana kamu dapat menjual sampah yang sudah kamu kumpulkan</p>
            Untuk mulai menjual sampah, kamu harus Login terlebih dahulu, atau jika belum punya akun silahkan daftar !
        @endguest
    </div>
</div>
@endsection