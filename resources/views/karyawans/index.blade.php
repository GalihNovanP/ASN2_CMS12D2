@extends('layouts.app')

@section('content')
<h2>Daftar Karyawan</h2>
<a href="{{ route('karyawans.create') }}" class="btn btn-primary mb-3">+ Tambah Karyawan</a>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->jabatan }}</td>
            <td>{{ $karyawan->email }}</td>
            <td>
                <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
