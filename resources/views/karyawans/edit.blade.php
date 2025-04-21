@extends('layouts.app')

@section('content')
<h2>Edit Karyawan</h2>

<form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}" required>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="{{ $karyawan->jabatan }}" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ $karyawan->email }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
