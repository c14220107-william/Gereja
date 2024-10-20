@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full items-start justify-center bg-gray-900 bg-blend-exclusion" style="background-image: url({{ asset('img/fotodalam.JPG') }}); background-size: cover; background-position: center;">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">

        foreach ($ev)
        <!-- Card 1: Statistik -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Total Jemaat</h2>
            <p class="text-3xl mt-4">250</p>
        </div>
    
        <!-- Card 2: Event Mendatang -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Event Mendatang</h2>
            <p class="text-xl mt-4">Ibadah Paskah - 12 April 2024</p>
        </div>
    
        <!-- Card 3: Pengumuman -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Pengumuman</h2>
            <p class="text-xl mt-4">Perayaan Natal - 25 Desember 2024</p>
        </div>
    </div>
</div>
    
@endsection