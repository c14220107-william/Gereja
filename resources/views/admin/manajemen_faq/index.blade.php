@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full items-center justify-center bg-white">
    <div class="container mx-auto p-6">
        <!-- Judul -->
        <h1 class="text-4xl font-extrabold mb-6 text-center text-gray-800">📩 PESAN MASUK</h1>

<!-- Dropdown Records per Page -->
<div class="flex justify-end items-center mb-6">
    <label for="recordsPerPage" class="text-sm font-semibold text-gray-800 mr-2">Tampilkan:</label>
    <select id="recordsPerPage" 
        class="border border-gray-300 rounded-lg py-2 px-4 bg-white text-gray-800 text-center shadow-md hover:shadow-lg focus:ring focus:ring-gray-200 focus:outline-none transition duration-100"
        style="width: center; min-width: 90px;" 
        onchange="changeRecordsPerPage()">
        <option value="10" @if(request()->get('per_page') == 10) selected @endif>10</option>
        <option value="25" @if(request()->get('per_page') == 25) selected @endif>25</option>
        <option value="50" @if(request()->get('per_page') == 50) selected @endif>50</option>
        <option value="100" @if(request()->get('per_page') == 100) selected @endif>100</option>
    </select>
</div>
        <!-- Tabel dengan Desain Modern -->
        <div class="rounded-xl shadow-lg overflow-hidden">
            <table class="min-w-full">
                <!-- Header Tabel -->
                <thead class="bg-[#4B2E2E] text-white">
                    <tr>
                        <th class="py-4 px-6 text-left font-semibold uppercase tracking-wide">NAMA</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase tracking-wide">KRITIK & SARAN</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase tracking-wide">TANGGAL</th>
                    </tr>
                </thead>
                <!-- Isi Tabel -->
                <tbody>
                    @php
                        // Logika Paginasi Manual
                        $allData = \App\Models\KritikSaran::all(); // Ambil semua data
                        $perPage = request()->get('per_page', 10); // Default 10 record per halaman
                        $currentPage = request()->get('page', 1); // Halaman saat ini
                        $start = ($currentPage - 1) * $perPage; // Hitung posisi mulai
                        $kritik_sarans = $allData->slice($start, $perPage); // Potong data sesuai halaman
                        $total = $allData->count(); // Total data
                    @endphp

                    @forelse ($kritik_sarans as $faq)
                    <tr class="@if($loop->even) bg-[#F8F3E3] @else bg-[#EDE0D4] @endif hover:bg-[#D4C4B7] transition duration-200">
                        <td class="py-4 px-6 text-gray-800">{{ $faq->name }}</td>
                        <td class="py-4 px-6 text-gray-600">{{ Str::limit($faq->kritikSaran, 50, '...') }}</td>
                        <td class="py-4 px-6 text-gray-600">{{ $faq->created_at->format('Y-m-d') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="py-4 px-6 text-center text-gray-500">Tidak ada pesan masuk</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginasi -->
        <div class="flex justify-between items-center mt-6">
            <!-- Tombol Sebelumnya -->
            @if($currentPage > 1)
            <a href="?page={{ $currentPage - 1 }}&per_page={{ $perPage }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-200">
                Sebelumnya
            </a>
            @else
            <span class="text-gray-500 py-2 px-4">Sebelumnya</span>
            @endif

            <!-- Informasi Halaman -->
            <span class="font-semibold text-gray-700">Halaman {{ $currentPage }} dari {{ ceil($total / $perPage) }}</span>

            <!-- Tombol Selanjutnya -->
            @if($currentPage < ceil($total / $perPage))
            <a href="?page={{ $currentPage + 1 }}&per_page={{ $perPage }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-200">
                Selanjutnya
            </a>
            @else
            <span class="text-gray-500 py-2 px-4">Selanjutnya</span>
            @endif
        </div>
    </div>
</div>

<script>
    function changeRecordsPerPage() {
        const perPage = document.getElementById('recordsPerPage').value;
        const url = new URL(window.location.href);
        url.searchParams.set('per_page', perPage);
        window.location.href = url.toString();
    }
</script>
@endsection
