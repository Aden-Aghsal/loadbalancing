<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>
<a href="{{ route('mahasiswa.create') }}">Tambah Data</a>

@if(session('success'))
    <div style="color:green;">{{ session('success') }}</div>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    @forelse($data as $mhs)
    <tr>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->prodi }}</td>
        <td>{{ $mhs->tanggal_lahir }}</td>
        <td>{{ $mhs->alamat }}</td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6">Belum ada data.</td>
    </tr>
    @endforelse
</table>

</body>
</html>
