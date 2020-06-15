@extends('layouts/main')

@section('title', 'Ubah Data Mahasiswa')

@section('container') <div class="container mt-4">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-light">Form Ubah Data Mahasiswa</h1>

            <form method="post" action="/students/ {{ $student->id }}"> @method('patch') @csrf 
                <div class="form-group">
                    <label for="name" class="text-light">Nama</label>
                     <input 
                        type="text"
                        class="form-control @error('nama') is-invalid @enderror" 
                        id="name"
                        placeholder="Nama"
                        name="name"
                        value="{{ $student -> name }}"> @error('name') 
                        <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror </div>
                <div class="form-group"> 
                    <label for="nim" class="text-light">NIM</label> 
                    <input 
                        type="text"
                        class="form-control @error('nim') is-invalid @enderror" 
                        id="nim"
                        placeholder="NIM"
                        name="nim"
                        value="{{ $student->nim }}"> @error('nim')
                         <div class="invalid-feedback">{{ $message }}</div>
                        @enderror </div>
                <div class="form-group">
                     <label for="email" class="text-light">email</label> 
                     <input 
                        type="text" 
                        class="form-control"
                        id="email" 
                        placeholder="Email"
                        name="email"
                        value="{{ $student->email }}"> </div>
                <div class="form-group">
                     <label for="jurusan"class="text-light">Jurusan</label>
                      <input 
                        type="text"
                        class="form-control"
                        id="jurusan"
                        placeholder="Jurusan"
                        name="jurusan"
                        value="{{ $student->jurusan }}"> </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div> @endsection