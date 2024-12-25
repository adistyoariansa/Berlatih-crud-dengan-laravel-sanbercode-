@extends('layout.master') <!-- Ganti 'layout.master' dengan layout yang Anda gunakan -->

@section('judul')
detail kategori

@endsection

@section('content')

<h1>{{$kategori->nama}}</h1>
<p>{{$kategori->deskripsi}}</p>

<a href="/kategori" class="btn btn-secondary btn-sm">kembali</a>
@endsection