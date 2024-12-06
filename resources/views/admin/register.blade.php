@extends('admin.layouts.header')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-600 via-teal-500 to-purple-600 relative bg-cover bg-center" style="background-image: url({{ asset('img/fotodalam.JPG') }});">
    <!-- Overlay for better contrast -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="max-w-md w-full bg-white p-6 rounded-xl shadow-lg z-10 relative">
        <!-- Title with bold text -->
        <h1 class="text-2xl font-bold text-center text-gray-900 mb-6">Register Admin</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-md my-4 text-center">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif

        <!-- Error Message -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-md my-4 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('admin.register.submit') }}" method="POST" class="space-y-5">
            @csrf
            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" placeholder="Masukkan Nama Anda" required>
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" placeholder="name@email.com" required>
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" placeholder="Masukkan Password Anda" required>
            </div>

            <!-- Password Confirmation Input -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition duration-200" placeholder="Masukkan Password Anda" required>
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="w-full px-4 py-2 bg-black text-white font-semibold rounded-md shadow-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-black transition duration-200 ease-in-out">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
