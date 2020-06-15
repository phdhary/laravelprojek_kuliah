@extends('layouts/main')

@section('title', 'Tambah Data Mahasiswa Baru')

@section('container')
<div class="col-6 text-light">
    <h1 class="mt-10">Tambah Data Mahasiswa Baru</h1>

    <form action="/students/store" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="nama">NIM</label>
            <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label for="nama">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="nama">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan Jurusan">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
</div>
@endsection