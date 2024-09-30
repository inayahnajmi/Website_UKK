@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3> <?php echo $nama; ?> </h3>
    <p> <?php echo $email; ?> </p>
    <img src="images/{{$gambar}}" alt="{{$nama}}" width = "200px">
@endsection