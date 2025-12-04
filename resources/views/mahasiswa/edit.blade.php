<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama: <input type="text" name="nama" value="{{ $mhs->nama }}"><br><br>
    NIM: <input type="text" name="nim" value="{{ $mhs->nim }}"><br><br>
    Prodi: <input type="text" name="prodi" value="{{ $mhs->prodi }}"><br><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" value="{{ $mhs->tanggal_lahir }}"><br><br>
    Alamat:<br>
    <textarea name="alamat">{{ $mhs->alamat }}</textarea><br><br>

    <button type="submit">Update</button>
</form>
