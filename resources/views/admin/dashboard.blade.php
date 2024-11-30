@extends('admin.layouts.app')

@section('content')
<!-- Dashboard Layout -->
<div class="container mx-auto my-10 px-6">
    <!-- Tanggal dan Waktu Real-Time -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Dashboard</h2>
        {{-- <h3 class="text-2xl font-bold">Halo {{$user}}</h3> --}}

        
        <div class="text-lg font-semibold">
            <span id="currentDateTime"></span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- All Members Card -->
        <div data-aos="fade-up" class="bg-blue-500 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm2-8a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-xl font-semibold">Manajemen Form Penyerahan Anak</h3>
            </div>
            <p class="text-3xl mt-4">{{$form_penyerahan_anak}}</p>
            <a href="{{ route('manajemenJemaat.index')}}" class="mt-4 inline-block text-blue-100 hover:text-blue-200">View Details</a>
        </div>
    
        <!-- New Members Card -->
        <div data-aos="fade-up" class="bg-green-500 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M15 3a3 3 0 00-3-3 3 3 0 00-3 3v7a3 3 0 000 6v2h6v-2a3 3 0 000-6V3z" />
                </svg>
                <h3 class="text-xl font-semibold">Manajemen Pernikahan</h3>
            </div>
            <p class="text-3xl mt-4">{{$form_pernikahan}}</p>
            <a href="{{ route('manajemenJemaat.index2')}}" class="mt-4 inline-block text-green-100 hover:text-green-200">View Details</a>
        </div>
    
        <!-- Givings Card -->
        <div data-aos="fade-up" class="bg-yellow-500 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm2-8a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-xl font-semibold">Manajemen Baptisan Air</h3>
            </div>
            <p class="text-3xl mt-4">{{$form_baptisan}}</p>
            <a href="{{ route('manajemenJemaat.index3')}}" class="mt-4 inline-block text-yellow-100 hover:text-yellow-200">View Details</a>
        </div>
    
        <!-- Birthdays Card -->
        <div data-aos="fade-up" class="bg-red-500 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 12h1V8h-1V6h4v2H9v4z" />
                </svg>
                <h3 class="text-xl font-semibold">Manajemen Kritik dan Saran</h3>
            </div>
            <p class="text-3xl mt-4">{{$form_kritikSaran}}</p>
            <a href="{{route ('manajemen_faq.index')}}" class="mt-4 inline-block text-red-100 hover:text-red-200">View Details</a>
        </div>

        <!-- Total Givings Card -->
        <div data-aos="fade-up" class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M12 9V6h-1v3H8V6H7v3H5V6H4v3H2v4h4v3h2v3h6v-3h2v-3h4v-4h-2z" />
                </svg>
                <h3 class="text-xl font-semibold">Total Persembahan</h3>
            </div>
            <p class="text-3xl mt-4">Rp {{ number_format($totalAllPersembahan, 0, ',', '.') }}</p>
            <a href="{{ route('admin.manajemen_persembahan.index') }}" class="mt-4 inline-block text-blue-200 hover:text-blue-300">View Persembahan</a>
        </div>

        <!-- Total Offerings Card -->
        <div data-aos="fade-up" class="bg-gradient-to-r from-green-600 via-green-700 to-green-800 text-white rounded-lg p-6 shadow-lg hover:scale-105 hover:shadow-xl transition-all transform">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm2-8a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-xl font-semibold">Total Offerings</h3>
            </div>
            <p class="text-3xl mt-4">Rp 18,000</p>
        </div>
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
