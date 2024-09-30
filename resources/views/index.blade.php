@extends('layouts.main')

@section('container')
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang</title>
  <body>
  <body>

<div class="welcome-section">
  <h1>Selamat Datang di Enchanté Cosmetics</h1>
  <link rel="stylesheet" href="css/style.css">
  <p class="welcome-text">Terima kasih telah mengunjungi website kami. Kami siap memberikan layanan terbaik untuk Anda.</p>
  
</div>

</body>
  <h2>Dapatkan promo menarik</h2>

  <div class="image-gallery">
    <img src="{{asset('admin/images/icon/bnb.webp')}}" alt="BNB1" width="360" height="360" >
    <img src="{{asset('admin/images/icon/ajarin.jpg')}}" alt="azarine" width="360" height="360">
    <img src="{{asset('admin/images/icon/bnb2.jpg')}}" alt="bnb2" width="360" height="360">
    <img src="{{asset('admin/images/icon/mayb.jpeg')}}" alt="bnb2" width="360" height="360">
    <img src="{{asset('admin/images/icon/pf.webp')}}" alt="pf" width="360" height="360">
    <img src="{{asset('admin/images/icon/eyeliner.png')}}" alt="eye" width="360" height="360">
    <img src="{{asset('admin/images/icon/eyeshadow.jpg')}}" alt="eyes" width="360" height="360">
    <img src="{{asset('admin/images/icon/emina.jpg')}}" alt="emina" width="360" height="360">
    <img src="{{asset('admin/images/icon/hanasui.webp')}}" alt="hanasui" width="360" height="360">
    <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
  </div>
  <div class="footer">
    <h5>Follow kami di instagram untuk info lebih lanjut.</h5>
  </div>
  <div class="instagram">
    <img src="{{asset('admin/images/icon/ig.png')}}" alt="ig" width="20" height="20">
    <p>@enchante.id</p>
  </div>
  <div clas="title-top mb-5">
        <h2 class="fw-bold">Tulis Pesananmu!</h2>
  </div>
    <form method="post" action="{{route('contacts.store')}}">
        {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placehorder="Nama" name="nama">
        <label for="text" class="form-label">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputemail" placehorder="Email" name="email">
        <label for="inputemail" class="form-label">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingTextarea2" placehorder="Tinggalkan pesan disini!" name="pesan"></textarea>
        <label for="floatingTextarea2">Produk Yang Ingin Kamu Pesan</label>
    </div>
    <div class="buttonpesan">
    <a href="#">
    <button type="submit" class="btn btn-primary" onclick="showAlert()">Pesan Sekarang</button>
    </a>
    </div>
    <body>
        <script>
        function showAlert() {
        alert('Pesanan kamu sudah masuk!');
        } </script>
    </body>
    </form>
</body>

  
</head>

</html>

@endsection

