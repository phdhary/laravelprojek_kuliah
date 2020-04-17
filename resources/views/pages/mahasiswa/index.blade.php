@extends('layouts/main')

@section('title','Mahasiswa')

@section('container')
<div class="container mt-4">
    <div class="row">
        <div class="col-10">
            <div>
                <h1 class="display-4 text-light">Mahasiswa</h1>
            </div>
            <a class="btn badge badge-primary" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
        </div>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover table-dark mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
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
                            <form action="{{ route('mahasiswa.edit', $mhs->id) }}">
                                <button class="btn badge badge-success">
                                    edit
                                </button>
                            </form>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class=" btn badge badge-danger">
                                    delete
                                </button>
                            </form>
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
</div>
@endsection