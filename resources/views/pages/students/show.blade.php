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
            <a href="{{ $student -> id }}/edit" type="submit" class="btn btn-primary">Edit</a>
            <form action="{{ $student -> id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/students" class="card-link">Kembali</a>
        </div>
    </div>
</div>
@endsection