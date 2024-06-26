@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div>
        <!-- Jika pengguna telah login -->
        @auth
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Cuan Maksimal!</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Isi Form Data Penjualan Sampah</h5>
                    <form>
                        <div class="form-group py-2">
                          <label for="name">Nama:</label>
                          <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" name="name">
                        </div>
                        <div class="form-group py-2">
                          <label for="city">Kabupaten/Kota:</label>
                          <select class="form-control" id="city" name="city">
                            <option>- Pilih Kabupaten/Kota -</option>
                            <option>Kabupaten Bekasi</option>
                            <option>Kota Bekasi</option>
                            <option>Kabupaten Wonogiri</option>
                          </select>
                        </div>
                        <div class="form-group py-2">
                          <label for="address">Alamat:</label>
                          <textarea class="form-control" id="address" rows="3" placeholder="Masukkan alamat Anda" name="address"></textarea>
                        </div>
                        <div class="form-group py-2">
                          <label for="image">Upload Gambar:</label>
                          <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                      </form>
                </div>
            </div>
        </div>
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
                    <ol>
                        <li>Pastikan sudah memiliki akun di website Bersih Indonesiaku. <a href="/register" style="text-decoration: none">Daftar sekarang</a> atau <a href="/login" style="text-decoration: none">login</a> jika sudah memiliki akun.</li>
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