@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full justify-center bg-[#F4F4F6]">
    <div class="container mx-auto p-6">
        <!-- Header dengan Judul -->
        <div class="mb-6">
    <!-- Judul -->
    <h1 class="text-4xl font-extrabold text-[#000000] text-left mb-4">PESAN MASUK</h1>
    
    <!-- Filter dan Pengaturan -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 sm:gap-6">
        <!-- Kolom Pencarian -->
        <input type="text" id="searchInput" onkeyup="searchTable()" 
               placeholder="Cari Nama atau Kritik" 
               class="py-3 px-6 w-full sm:w-128 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm focus:outline-none">

        <!-- Dropdown Filter dan Tampilkan -->
        <div class="flex space-x-4">
            <!-- Dropdown Filter Anonymous/Nama (tanpa tanda panah) -->
            <select id="filterType" onchange="filterType()" 
                    class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm">
                <option value="all">Semua</option>
                <option value="named" @if(request()->get('filter_type') == 'named') selected @endif>Nama</option>
                <option value="anonymous" @if(request()->get('filter_type') == 'anonymous') selected @endif>Anonymous</option>
            </select>

            <!-- Dropdown Tampilkan Records -->
            <div class="flex items-center">
                <label for="recordsPerPage" class="text-sm font-semibold text-[#000000] mr-2">Tampilkan:</label>
                <select id="recordsPerPage" class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm" 
                        onchange="changeRecordsPerPage()">
                    <option value="10" @if(request()->get('per_page') == 10) selected @endif>10</option>
                    <option value="20" @if(request()->get('per_page') == 20) selected @endif>20</option>
                    <option value="30" @if(request()->get('per_page') == 30) selected @endif>30</option>
                    <option value="100" @if(request()->get('per_page') == 100) selected @endif>100</option>
                </select>
            </div>
        </div>
    </div>
</div>



        <!-- Tabel Kritik & Saran -->
        <div class="rounded-xl shadow-lg overflow-hidden bg-white">
            <table class="min-w-full" id="kritikTable">
                <thead class="bg-[#333333]">
                    <tr>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide">NAMA</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide">KRITIK & SARAN</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide">TANGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $filterType = request()->get('filter_type', 'all');
                        $allData = \App\Models\KritikSaran::when($filterType === 'named', function ($query) {
                            return $query->whereNotNull('name')->where('name', '!=', '')->where('name', '!=', 'Anonymous');
                        })->when($filterType === 'anonymous', function ($query) {
                            return $query->where(function ($query) {
                                $query->whereNull('name')
                                      ->orWhere('name', '')
                                      ->orWhere('name', 'Anonymous');
                            });
                        })->get();

                        $perPage = request()->get('per_page', 10);
                        $currentPage = request()->get('page', 1);
                        $start = ($currentPage - 1) * $perPage;
                        $kritik_sarans = $allData->slice($start, $perPage);
                        $total = $allData->count();
                    @endphp

                    @forelse ($kritik_sarans as $faq)
                    <tr class="kritik-row @if($loop->even) bg-[#F4F4F6] @endif">
                        <td class="py-4 px-6 text-[#000000]">
                            {{ $faq->name ?? 'Anonymous' }}
                        </td>
                        <td class="py-4 px-6 text-[#66666E]">
                            {{ Str::limit($faq->kritikSaran, 50, '...') }}
                        </td>
                        <td class="py-4 px-6 text-[#66666E]">
                            {{ $faq->created_at->format('Y-m-d') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="py-4 px-6 text-center text-[#9999A1]">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Paginasi -->
        <div class="flex justify-between items-center mt-6">
            @if($currentPage > 1)
            <a href="?page={{ $currentPage - 1 }}&per_page={{ $perPage }}&filter_type={{ $filterType }}" 
               class="bg-[#000000] text-white py-2 px-4 rounded hover:bg-[#66666E]">
                Sebelumnya
            </a>
            @else
            <span class="text-[#9999A1] py-2 px-4">Sebelumnya</span>
            @endif

            <span class="text-[#000000] font-semibold">Halaman {{ $currentPage }} dari {{ ceil($total / $perPage) }}</span>

            @if($currentPage < ceil($total / $perPage))
            <a href="?page={{ $currentPage + 1 }}&per_page={{ $perPage }}&filter_type={{ $filterType }}" 
               class="bg-[#000000] text-white py-2 px-4 rounded hover:bg-[#66666E]">
                Selanjutnya
            </a>
            @else
            <span class="text-[#9999A1] py-2 px-4">Selanjutnya</span>
            @endif
        </div>
    </div>
</div>

<script>
    function searchTable() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const rows = document.querySelectorAll("#kritikTable tbody tr");
        rows.forEach(row => {
            row.style.display = row.innerText.toLowerCase().includes(input) ? "" : "none";
        });
    }

    function filterType() {
        const filterType = document.getElementById("filterType").value;
        const url = new URL(window.location.href);
        url.searchParams.set('filter_type', filterType);
        window.location.href = url.toString();
    }

    function changeRecordsPerPage() {
        const perPage = document.getElementById("recordsPerPage").value;
        const url = new URL(window.location.href);
        url.searchParams.set('per_page', perPage);
        window.location.href = url.toString();
    }
</script>
@endsection
