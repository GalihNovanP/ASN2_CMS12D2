<h1>Yakin ingin menghapus karyawan ini?</h1>
<p><strong>{{ $karyawan->nama }}</strong><br>{{ $karyawan->deskripsi }}</p>

<form action="/karyawans/{{ $karyawan->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
</form>

<a href="/karyawans/{{ $karyawan->id }}">← Batal</a>

