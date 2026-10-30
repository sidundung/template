

@extends('mahasiswa.layout')
@section('content')


    <h2>Data Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NIM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th>
        </tr>
        @foreach ($mahasiswas as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST">
                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection