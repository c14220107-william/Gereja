@extends('admin.layouts.app')

@section('content')
<!-- Dashboard Layout -->
<div class="container mx-auto my-10 px-6">
    <!-- Tanggal dan Waktu Real-Time -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Dashboard</h2>
        <div class="text-lg font-semibold">
            <span id="currentDateTime"></span>
        </div>
    </div>

    <!-- Grid Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- All Members Card -->
        <div class="bg-blue-500 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">All Members</h3>
            <p class="text-3xl mt-4">0</p>
            <a href="#" class="mt-4 inline-block text-blue-100">View Details</a>
        </div>

        <!-- New Members Card -->
        <div class="bg-green-500 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">New Members</h3>
            <p class="text-3xl mt-4">0</p>
            <a href="#" class="mt-4 inline-block text-green-100">Add Member</a>
        </div>

        <!-- Givings Card -->
        <div class="bg-yellow-500 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">Givings</h3>
            <p class="text-3xl mt-4">5</p>
            <a href="#" class="mt-4 inline-block text-yellow-100">View Details</a>
        </div>

        <!-- Birthdays Card -->
        <div class="bg-red-500 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">Upcoming Birthdays</h3>
            <p class="text-3xl mt-4">0</p>
            <a href="#" class="mt-4 inline-block text-red-100">View Birthdays</a>
        </div>

        <!-- Total Givings Card -->
        <div class="bg-blue-600 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">Total Givings</h3>
            <p class="text-3xl mt-4">13500</p>
        </div>

        <!-- Total Offerings Card -->
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-md text-center">
            <h3 class="text-xl font-semibold">Total Offerings</h3>
            <p class="text-3xl mt-4">18000</p>
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
