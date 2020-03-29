@extends('layouts/main')

@section('title','Mahasiswa')

@section('container')
<div class="container mt-4">
    <div class="row">
        <div class="col-10">
            <div>
                <h1 class="display-4 text-light">Mahasiswa</h1>
            </div>
            <a class="badge badge-primary" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
        </div>


        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-light">

                @forelse ($mahasiswa as $mhs)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mhs->name}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>

                @empty
                <tr>
                    <td class="text-center">
                        Data tidak tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection