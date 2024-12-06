@extends('admin.layouts.app')

@section('content')
<!-- Dashboard Layout -->
<div class="container mx-auto my-10 px-6">
    <!-- Tanggal dan Waktu Real-Time -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-4xl font-bold">Dashboard</h2>
        {{-- <h3 class="text-2xl font-bold">Halo {{$user}}</h3> --}}

        
        <div class="text-lg font-semibold">
            <span id="currentDateTime"></span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
   <!-- All Members Card -->
<div data-aos="fade-up" class="bg-[#ECEBE4] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12 2a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zM7 14a5 5 0 00-5 5v1a1 1 0 001 1h16a1 1 0 001-1v-1a5 5 0 00-5-5H7zm2 2h6a3 3 0 013 3H6a3 3 0 013-3z" clip-rule="evenodd" />
        </svg>
        <h3 class="text-xl font-semibold">Manajemen Form Penyerahan Anak</h3>
    </div>
    <p class="text-3xl mt-4">{{$form_penyerahan_anak}}</p>
    <a href="{{ route('manajemenJemaat.index')}}" class="mt-4 inline-block text-gray-700 hover:text-gray-900">View Details</a>
</div>

<!-- New Members Card -->
<div data-aos="fade-up" class="bg-[#DADDD8] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path d="M8.5 13A3.5 3.5 0 1 1 12 9.5 3.5 3.5 0 0 1 8.5 13zm7 0a3.5 3.5 0 1 1 3.5-3.5 3.5 3.5 0 0 1-3.5 3.5zm2.8-8.8a4.4 4.4 0 0 0-6.2 0l-1.4 1.4 6.2 6.2 1.4-1.4a4.4 4.4 0 0 0 0-6.2z"/>
        </svg>
        <h3 class="text-xl font-semibold">Manajemen Pernikahan</h3>
    </div>
    <p class="text-3xl mt-4">{{$form_pernikahan}}</p>
    <a href="{{ route('manajemenJemaat.index2')}}" class="mt-4 inline-block text-gray-700 hover:text-gray-900">View Details</a>
</div>

<!-- Givings Card -->
<div data-aos="fade-up" class="bg-[#EEF0F2] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm2-8a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
        </svg>
        <h3 class="text-xl font-semibold">Manajemen Baptisan Air</h3>
    </div>
    <p class="text-3xl mt-4">{{$form_baptisan}}</p>
    <a href="{{ route('manajemenJemaat.index3')}}" class="mt-4 inline-block text-gray-700 hover:text-gray-900">View Details</a>
</div>

<!-- Birthdays Card -->
<div data-aos="fade-up" class="bg-[#EEF0F2] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 12h1V8h-1V6h4v2H9v4z" />
        </svg>
        <h3 class="text-xl font-semibold">Manajemen Kritik dan Saran</h3>
    </div>
    <p class="text-3xl mt-4">{{$form_kritikSaran}}</p>
    <a href="{{route ('manajemen_faq.index')}}" class="mt-4 inline-block text-gray-700 hover:text-gray-900">View Details</a>
</div>

<!-- Total Givings Card -->
<div data-aos="fade-up" class="bg-[#ECEBE4] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path d="M12 9V6h-1v3H8V6H7v3H5V6H4v3H2v4h4v3h2v3h6v-3h2v-3h4v-4h-2z" />
        </svg>
        <h3 class="text-xl font-semibold">Total Persembahan</h3>
    </div>
    <p class="text-3xl mt-4">Rp {{ number_format($totalAllPersembahan, 0, ',', '.') }}</p>
    <a href="{{ route('admin.manajemen_persembahan.index') }}" class="mt-4 inline-block text-gray-700 hover:text-gray-900">View Persembahan</a>
</div>

<!-- Total Offerings Card -->
<div data-aos="fade-up" class="bg-[#DADDD8] text-black rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
    <div class="flex items-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-black" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm2-8a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
        </svg>
        <h3 class="text-xl font-semibold">Total Offerings</h3>
    </div>
    <p class="text-3xl mt-4">Rp 18,000</p>
</div>


</div>

<!-- Script untuk Tanggal dan Waktu Real-Time -->
<script>
    function updateDateTime() {
        const now = new Date();
        const options = { 
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        };
        document.getElementById('currentDateTime').textContent = now.toLocaleDateString('en-US', options);
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>


@endsection
