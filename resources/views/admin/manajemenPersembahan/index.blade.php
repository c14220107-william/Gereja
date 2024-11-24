@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <!-- Heading -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Persembahan Gereja</h1>
        <p class="text-gray-600">Kelola data persembahan dengan mudah.</p>
    </div>

    <!-- Form Input -->
    <div class="bg-white shadow-md rounded p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Persembahan</h2>
        <form action="{{ route('admin.storePersembahan') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select id="kategori" name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="Umum">Umum</option>
                    <option value="Youth">Youth</option>
                    <option value="Sekolah_Minggu">Sekolah Minggu</option>
                </select>
            </div>
            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp)</label>
                <input type="number" id="jumlah" name="jumlah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="detail" class="block text-sm font-medium text-gray-700">Detail</label>
                <textarea id="detail" name="detail" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">Simpan</button>
        </form>
    </div>

    <!-- Table Display -->
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Persembahan</h2>
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Tanggal</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Detail</th>
                    <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persembahanss as $persembahan)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $persembahan->tanggal }}</td>
                        <td class="px-4 py-2">{{ $persembahan->kategori }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($persembahan->jumlah, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $persembahan->detail }}</td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('admin.manajemenPersembahan.edit', ['id' => $persembahan->id]) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.manajemenPersembahan.destroy', $persembahan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Total Persembahan per Kategori -->
    <div class="bg-white shadow-md rounded p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Total Persembahan per Kategori</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="text-center">
                <p class="text-sm font-medium text-gray-700">Umum</p>
                <p class="text-lg font-bold text-blue-600">Rp {{ number_format($totalPerCategory['Umum'] ?? 0, 0, ',', '.') }}</p>
            </div>
            <div class="text-center">
                <p class="text-sm font-medium text-gray-700">Youth</p>
                <p class="text-lg font-bold text-green-600">Rp {{ number_format($totalPerCategory['Youth'] ?? 0, 0, ',', '.') }}</p>
            </div>
            <div class="text-center">
                <p class="text-sm font-medium text-gray-700">Sekolah Minggu</p>
                <p class="text-lg font-bold text-red-600">Rp {{ number_format($totalPerCategory['Sekolah_Minggu'] ?? 0, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

    <!-- Chart Display -->
    <div class="bg-white shadow-md rounded p-6 mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Grafik Persembahan</h2>
        <canvas id="chartPersembahan"></canvas>
    </div>
</div>

<!-- Chart.js Integration -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartPersembahan').getContext('2d');
    const chartPersembahan = new Chart(ctx, {
        type: 'line', // Grafik tipe garis
        data: {
            labels: @json($chartData['labels']), // Tanggal
            datasets: @json($chartData['data']), // Data berdasarkan kategori
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Tanggal', // Label sumbu X
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Persembahan (Rp)', // Label sumbu Y
                    },
                    beginAtZero: true, // Mulai sumbu Y dari 0
                }
            }
        }
    });
</script>
@endsection
