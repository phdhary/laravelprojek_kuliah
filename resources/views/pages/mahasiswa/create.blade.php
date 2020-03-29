@extends('layouts/main')

@section('title','Mahasiswa')

@section('container')
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container text-center">
            <h1 class="display-4 text-light">Tambah Mahasiswa</h1>
        </div>
    </div>
    {{-- Nama --}}
    <div class="input-group mb-3">
        <input 
            type="text"
            name="name"
            class="form-control @error('name') is-invalid @enderror" 
            value="{{ old('name') }}"
            placeholder="Nama">
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    {{-- NIM --}}
    <div class="input-group mb-3">
        <input 
            type="text" 
            name="nim"
            class="form-control @error('nim') is-invalid @enderror"
            value="{{ old('nim') }}"
            placeholder="NIM">
            @error('nim') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    {{-- Email --}}
    <div class="input-group mb-3">
        <div class="input-group-prepend ">
            <span class="input-group-text" id="basic-addon1">Email</span>
        </div>
        <input 
            type="text" 
            name="email"
            class="form-control @error('email') is-invalid @enderror" 
            value="{{ old('email') }}"
            placeholder="xxx@mail.com">
            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    {{-- Jurusan --}}
    <div class="input-group mb-3">
        <input 
            type="text" 
            name="jurusan"
            class="form-control @error('jurusan') is-invalid @enderror" 
            value="{{ old('jurusan') }}"
            placeholder="Jurusan">
            @error('jurusan') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Tambah Mahasiswa</button>
    </div>
</form>

@endsection