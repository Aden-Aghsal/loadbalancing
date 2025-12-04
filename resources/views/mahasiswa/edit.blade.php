<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-700">Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Nama</label>
            <input type="text" name="nama" value="{{ $mhs->nama }}"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">NIM</label>
            <input type="text" name="nim" value="{{ $mhs->nim }}"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Prodi</label>
            <input type="text" name="prodi" value="{{ $mhs->prodi }}"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $mhs->tanggal_lahir }}"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">
        </div>

        <div>
            <label class="block font-semibold text-gray-600 mb-1">Alamat</label>
            <textarea name="alamat" rows="3"
                class="w-full border border-gray-300 p-2 rounded-lg focus:ring focus:ring-blue-200 focus:border-blue-500">{{ $mhs->alamat }}</textarea>
        </div>

        <button type="submit"
            class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">
            Update
        </button>
    </form>
</div>

</body>
</html>
