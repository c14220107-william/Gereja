@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <!-- Heading -->
    <div class="flex justify-between items-center mb-4">
        <div>
            <h1 class="text-4xl font-extrabold text-[#000000] text-left mb-1">Manajemen Persembahan Gereja</h1>
            <h3 class="text-xl font-semibold text-gray-500">Kelola data persembahan dengan mudah.</h3>
        </div>
        <!-- Button Tambah Persembahan -->
        <button id="toggleFormButton" 
            class="m-4 inline-block px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-black">
        Tambah Persembahan
        </button>
    </div>
    

    <!-- Form Input -->
    <div id="formTambahPersembahan" class="bg-white shadow-md rounded p-6 mb-8 hidden">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Persembahan</h2>
        <form action="{{ route('admin.storePersembahan') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                       required>
            </div>
            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select id="kategori" name="kategori" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" 
                        required>
                    <option value="Umum">Umum</option>
                    <option value="Youth">Youth</option>
                    <option value="Sekolah_Minggu">Sekolah Minggu</option>
                </select>
            </div>
            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp)</label>
                <input type="number" id="jumlah" name="jumlah" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                       required>
            </div>
            <div>
                <label for="detail" class="block text-sm font-medium text-gray-700">Detail</label>
                <textarea id="detail" name="detail" rows="1" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">Simpan</button>
        </form>
    </div>

    <!-- Table Display -->
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-2xl font-bold text-black mb-4">Daftar Persembahan</h2>

        <!-- Filter dan Pengaturan -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 sm:gap-6">
        {{-- <!-- Kolom Pencarian -->
        <input type="text" id="searchInput" onkeyup="searchTable()" 
               placeholder="Cari Nama atau Kritik" 
               class="py-3 px-6 w-full sm:w-128 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm focus:outline-none"> --}}

        <!-- Dropdown Filter dan Tampilkan -->
        <div class="flex space-x-4">
            <!-- Dropdown Filter Anonymous/Nama (tanpa tanda panah) -->
            <select id="filterType" onchange="filterType()" class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm">
                <option value="all">Semua</option>
                <option value="Umum">Umum</option>
                <option value="Youth">Youth</option>
                <option value="Sekolah_Minggu">Sekolah Minggu</option>
            </select>


            {{-- <!-- Dropdown Tampilkan Records -->
            <div class="flex items-center">
                <label for="recordsPerPage" class="text-sm font-semibold text-[#000000] mr-2">Tampilkan:</label>
                <select id="recordsPerPage" class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm" 
                        onchange="changeRecordsPerPage()">
                    <option value="10" @if(request()->get('per_page') == 10) selected @endif>10</option>
                    <option value="20" @if(request()->get('per_page') == 20) selected @endif>20</option>
                    <option value="30" @if(request()->get('per_page') == 30) selected @endif>30</option>
                    <option value="100" @if(request()->get('per_page') == 100) selected @endif>100</option>
                </select>
            </div> --}}
        </div>
    </div>

    <div class="rounded-xl shadow-lg overflow-hidden bg-white">
        <table id="tableDisplay" class="min-w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-[#333333]">
                <tr>
                    <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Tanggal</th>
                    <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Kategori</th>
                    <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Jumlah</th>
                    <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Detail</th>
                    <th class="py-4 px-3 text-center font-semibold uppercase text-white tracking-wide">Aksi</th>
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
                            <a href="{{ route('admin.manajemenPersembahan.edit', ['id' => $persembahan->id]) }}" class="px-4 py-2 bg-yellow-500 text-sm text-white rounded-md hover:bg-yellow-600 mr-2 inline-block">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.manajemenPersembahan.destroy', $persembahan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-sm text-white px-4 py-2 rounded-md hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
    <!-- Total Persembahan per Kategori -->
    <div class="bg-white shadow-md rounded p-6 mt-8">
        <h2 class="text-xl font-bold text-black mb-4">Total Persembahan per Kategori</h2>
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
        <h2 class="text-2xl font-bold text-black mb-4">Grafik Persembahan</h2>
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

    function searchTable() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");
        rows.forEach(row => {
            row.style.display = row.innerText.toLowerCase().includes(input) ? "" : "none";
        });
    }

    function filterType() {
        const filterType = document.getElementById("filterType").value;
        const rows = document.querySelectorAll("table tbody tr");
        rows.forEach(row => {
            const category = row.querySelector('td:nth-child(2)').textContent.trim();
            row.style.display = filterType === "all" || category === filterType ? "" : "none";
        });
    }

    document.getElementById('toggleFormButton').addEventListener('click', function() {
        const form = document.getElementById('formTambahPersembahan');
        form.classList.toggle('hidden');
    });

</script>
@endsection
