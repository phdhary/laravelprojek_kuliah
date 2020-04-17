@extends('layouts/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{ $student -> nama}} </h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $student -> nim}}</h6>
            <p class="card-text">{{ $student -> email}}</p>
            <p class="card-text">{{ $student -> jurusan}}</p>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="/students" class="card-link">Kembali</a>
        </div>
    </div>
</div>
@endsection