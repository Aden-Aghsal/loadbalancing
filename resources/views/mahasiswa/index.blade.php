<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="icon" href="{{ asset('assets/images/Frame_32.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">

    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-blue-600">Data Mahasiswa</h2>
        
        <div class="flex items-center gap-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-red-600 transition">
                    Logout
                </button>
            </form>

            <img src="{{ asset('assets/images/Frame_31.png') }}" alt="Logo" class="w-20 h-20 object-contain">
        </div>
    </div>

    <div class="mb-4">
        <a href="{{ route('mahasiswa.create') }}"
           class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="px-4 py-3 border">Nama</th>
                    <th class="px-4 py-3 border">NIM</th>
                    <th class="px-4 py-3 border">Prodi</th>
                    <th class="px-4 py-3 border">Tanggal Lahir</th>
                    <th class="px-4 py-3 border">Alamat</th>
                    <th class="px-4 py-3 border">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light">
                @forelse($data as $mhs)
                    <tr class="border-b border-gray-200 hover:bg-gray-100 text-center">
                        <td class="px-4 py-3 border font-medium text-gray-800">{{ $mhs->nama }}</td>
                        <td class="px-4 py-3 border">{{ $mhs->nim }}</td>
                        <td class="px-4 py-3 border">{{ $mhs->prodi }}</td>
                        <td class="px-4 py-3 border">{{ $mhs->tanggal_lahir }}</td>
                        <td class="px-4 py-3 border">{{ $mhs->alamat }}</td>
                        <td class="px-4 py-3 border">
                            <div class="flex item-center justify-center gap-2">
                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                   class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                                    Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Yakin hapus data {{ $mhs->nama }}?')"
                                            class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-gray-500 bg-gray-50">
                            <p class="text-base">Belum ada data mahasiswa.</p>
                            <p class="text-xs mt-1">Silakan klik tombol tambah data di atas.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>