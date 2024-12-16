@extends('admin.layouts.header')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-cover bg-center relative" 
     style="background-image: url({{ asset('img/fotodalam.JPG') }});">
    <!-- Overlay untuk kontras -->
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <!-- Container Form -->
    <div class="relative max-w-md w-full bg-white p-8 rounded-lg shadow-lg z-10">
        <!-- Heading -->
        <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Login Admin</h1>
        
        <!-- Error Message -->
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-md mb-4 text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ url('/admin/login') }}" method="POST" class="space-y-4">
            @csrf
            <!-- Email Input -->
            <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300" 
                       placeholder="name@email.com" required>
            </div>
            
            <!-- Password Input -->
            <div class="flex flex-col">
                <label for="password" class="text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-300" 
                       placeholder="Masukkan Password Anda" required>
            </div>

            <!-- Tombol Submit -->
            <div class="mt-6">
                <button type="submit" 
                        class="w-full px-4 py-2 bg-black text-white font-medium rounded-md hover:bg-gray-800 transition duration-300 focus:ring-2 focus:ring-gray-800 focus:outline-none">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
