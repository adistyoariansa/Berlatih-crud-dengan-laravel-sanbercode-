@extends('layout.master') <!-- Ganti 'layout.master' dengan layout yang Anda gunakan -->

@section('judul')
halaman tambah kategori
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/kategori/store" method="post">

    @csrf <!-- Tambahkan CSRF token untuk keamanan -->
    <div class="form-group">
      <label >nama kategori</label>
      <input type="text" name="nama" class="form-control">
    </div>
    
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label>deskripsi</label><br>
      <textarea name="deskripsi" class="form-controls" cols="120" rows="10"></textarea>
    </div>

    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection

