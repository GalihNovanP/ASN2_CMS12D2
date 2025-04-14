<h1>Daftar Karyawan</h1>

<ul>
    @foreach ($karyawans as $karyawan)
        <li>
            {{ $karyawan->nama }} -
            <a href="/karyawans/{{ $karyawan->id }}">Show</a> |
            <a href="/karyawans/{{ $karyawan->id }}/edit">Edit</a> |
            <form action="/karyawans/{{ $karyawan->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin mau hapus?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>



