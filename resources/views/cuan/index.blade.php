@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div>
        <!-- Jika pengguna telah login -->
        @auth
            <p>Silahkan isi data berikut !</p>
        @endauth

        <!-- Jika pengguna belum login -->
        @guest
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Cuan Maksimal!</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Kumpulkan sampahmu, ambil rupiahmu! 💸</h5>
                    {{-- <p class="card-text">
                        1. Bikin akun di website Bersih Indonesiaku<br>
                        2. Kumpulkan sampah<br>
                        3. Isi formulir ketersediaan sampah
                    </p> --}}
                    <ol>
                        <li>Pastikan sudah memiliki akun di website Bersih Indonesiaku. Daftar sekarang atau login jika sudah memiliki akun.</li>
                        <li>Kumpulkan sampah.</li>
                        <li>Isi data ketersediaan sampah di halaman "Cuan".
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-white">
                                  Perhatian
                                </div>
                                <div class="card-body">
                                  <p class="card-text">
                                    Untuk saat ini Bersih Indonesiaku baru bisa menangani penjualan sampah di <strong>Kabupaten/Kota Bekasi</strong> dan <strong>Kabupaten Wonogiri</strong>.
                                  </p>
                                </div>
                              </div>
                        </li>
                        <li>Tunggu hingga agen Bersih Indonesiaku menghubungimu.</li>
                        <li>Agen Bersih Indonesiaku akan mengambil sampah ke lokasimu.</li>
                        <li>Terima cuan dari hasil pengumpulan sampahmu !</li>
                    </ol>
                </div>
            </div>
        </div>
        @endguest
    </div>
</div>
@endsection