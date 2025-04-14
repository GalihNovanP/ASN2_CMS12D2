<h1>{{ $karyawan->nama }}</h1>
<p>{{ $karyawan->deskripsi }}</p>
<p>
    📝 <a href="/karyawans/{{ $karyawan->id }}/edit">Edit</a> |
    🗑️ <a href="/karyawans/{{ $karyawan->id }}/delete">Hapus</a>
</p>
<p><a href="/karyawans">← Kembali ke daftar</a></p>
