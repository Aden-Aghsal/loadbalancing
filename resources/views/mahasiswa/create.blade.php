<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-700">Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Nama</label>
            <input type="text" name="nama"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">NIM</label>
            <input type="text" name="nim"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Prodi</label>
            <input type="text" name="prodi"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Alamat</label>
            <textarea name="alamat" rows="3"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500"></textarea>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Simpan
        </button>
    </form>
</div>

</body>
</html>
