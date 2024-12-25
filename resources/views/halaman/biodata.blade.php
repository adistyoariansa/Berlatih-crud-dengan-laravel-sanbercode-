@extends('layout.master')

@section('judul')
halaman biodata
@endsection

@section('content')

<h1>halaman biodata</h1>
<form action="/send" method="post">
    @csrf

    <label>nama</label><br>
    <input type="text" name="fullname"><br><br>
    
    <label>alamat</label><br>
    <textarea name="alamat" id="" cols="60" rows="10"></textarea> <br>

    <label>jenis kelamin</label><br>
    <input type="radio" name="jk" value="1"> laki-laki
    <input type="radio" name="jk" value="2"> perempuan <br>
    <input type="submit" value="kirim">

</form>

@endsection
 
