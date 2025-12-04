<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-blue-600">Data Mahasiswa</h2>

    <a href="{{ route('mahasiswa.create') }}"
       class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
       + Tambah Data
    </a>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">NIM</th>
                    <th class="px-4 py-2 border">Prodi</th>
                    <th class="px-4 py-2 border">Tanggal Lahir</th>
                    <th class="px-4 py-2 border">Alamat</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($data as $mhs)
                    <tr class="text-center hover:bg-gray-50">
                        <td class="px-4 py-2 border">{{ $mhs->nama }}</td>
                        <td class="px-4 py-2 border">{{ $mhs->nim }}</td>
                        <td class="px-4 py-2 border">{{ $mhs->prodi }}</td>
                        <td class="px-4 py-2 border">{{ $mhs->tanggal_lahir }}</td>
                        <td class="px-4 py-2 border">{{ $mhs->alamat }}</td>
                        <td class="px-4 py-2 border">

                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                               class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500">
                                Edit
                            </a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    onclick="return confirm('Yakin hapus?')"
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-4 text-center text-gray-500">
                            Belum ada data.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
