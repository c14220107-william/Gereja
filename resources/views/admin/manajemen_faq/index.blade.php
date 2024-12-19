@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full justify-center bg-[#F4F4F6]">
    <div class="container mx-auto p-6">
        <!-- Header dengan Judul -->
        <div class="mb-6">
            <h1 class="text-4xl font-extrabold text-[#000000] text-left mb-4">PESAN MASUK</h1>

            <!-- Filter dan Pencarian -->
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 sm:gap-6">
                <input type="text" id="searchInput" onkeyup="searchTable()" 
                       placeholder="Cari Nama atau Kritik" 
                       class="py-3 px-6 w-full sm:w-128 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm focus:outline-none">

                <!-- Dropdown Filter -->
                <div class="flex space-x-4">
                    <select id="filterType" onchange="filterType()" 
                            class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm">
                        <option value="all">Semua</option>
                        <option value="named">Nama</option>
                        <option value="anonymous">Anonymous</option>
                    </select>

                    <!-- Records Per Page -->
                    <div class="flex items-center">
                        <label for="recordsPerPage" class="text-sm font-semibold text-[#000000] mr-2">Tampilkan:</label>
                        <select id="recordsPerPage" onchange="changeRecordsPerPage()" 
                                class="py-2 px-6 rounded-lg bg-[#E6E6E9] text-[#000000] border border-[#9999A1] shadow-sm text-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Kritik & Saran -->
        <div class="rounded-xl shadow-lg overflow-x-auto bg-white">
            <table class="table-fixed min-w-full" id="kritikTable">
                <thead class="bg-[#333333]">
                    <tr>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide w-1/4">NAMA</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide w-1/2">KRITIK & SARAN</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-white tracking-wide w-1/4">TANGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $kritik_sarans = \App\Models\KritikSaran::paginate(10);
                    @endphp

                    @forelse ($kritik_sarans as $faq)
                    <tr class="border-b @if($loop->even) bg-[#F4F4F6] @endif">
                        <td class="py-4 px-6 text-[#000000]">{{ $faq->name ?? 'Anonymous' }}</td>
                        <td class="py-4 px-6 text-[#66666E]">
                            <div class="flex items-start cursor-pointer" onclick="toggleText(this)">
                                <div class="flex-1 kritik-container">
                                    <span class="kritik-preview block truncate">{{ Str::limit($faq->kritikSaran, 50) }}</span>
                                    <span class="kritik-full hidden">{{ $faq->kritikSaran }}</span>
                                </div>
                                <div class="ml-2 text-black">
                                    <span class="icon-detail">▼</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-[#66666E]">{{ $faq->created_at->format('Y-m-d') }}</td>
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
            @if ($kritik_sarans->onFirstPage())
                <span class="text-[#9999A1] py-2 px-4">Sebelumnya</span>
            @else
                <a href="{{ $kritik_sarans->previousPageUrl() }}" 
                   class="bg-[#000000] text-white py-2 px-4 rounded hover:bg-[#66666E]">
                   Sebelumnya
                </a>
            @endif

            <span class="text-[#000000] font-semibold">
                Halaman {{ $kritik_sarans->currentPage() }} dari {{ $kritik_sarans->lastPage() }}
            </span>

            @if ($kritik_sarans->hasMorePages())
                <a href="{{ $kritik_sarans->nextPageUrl() }}" 
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
    function toggleText(element) {
        const preview = element.querySelector('.kritik-preview');
        const fullText = element.querySelector('.kritik-full');
        const icon = element.querySelector('.icon-detail');

        if (fullText.classList.contains('hidden')) {
            preview.classList.add('hidden');
            fullText.classList.remove('hidden');
            icon.innerText = '▲'; // Ikon Collapse
        } else {
            preview.classList.remove('hidden');
            fullText.classList.add('hidden');
            icon.innerText = '▼'; // Ikon Expand
        }
    }
</script>

<style>
    table.table-fixed {
        table-layout: fixed;
    }

    th, td {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .kritik-container {
        white-space: normal;
        word-wrap: break-word;
    }

    .icon-detail {
        font-size: 1rem;
        color: black; /* Ikon hitam */
    }
</style>
@endsection
