<h2>Tambah Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    Nama: <input type="text" name="nama"><br><br>
    NIM: <input type="text" name="nim"><br><br>
    Prodi: <input type="text" name="prodi"><br><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br><br>
    Alamat:<br>
    <textarea name="alamat"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>
