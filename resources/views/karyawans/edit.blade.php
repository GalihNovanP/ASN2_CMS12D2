<h1>Edit Karyawan</h1>
<form action="/karyawans/{{ $karyawan->id }}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nama" value="{{ $karyawan->nama }}" placeholder="Nama">
    <br>
    <input type="text" name="deskripsi" value="{{ $karyawan->deskripsi }}" placeholder="Deskripsi">
    <br>
    <button type="submit">Update</button>
</form>
<a href="/karyawans">Kembali</a>

