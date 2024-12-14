@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 via-teal-500 to-purple-500 bg-cover bg-center relative" style="background-image: url({{ asset('img/fotodalam.JPG') }});">
    <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Overlay for better contrast -->

    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg z-10">
        <h1 class="text-3xl font-bold text-center text-gray-900 mb-6">Login Admin</h1>
        
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-md my-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/admin/login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition ease-in-out duration-300" placeholder="name@email.com" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition ease-in-out duration-300" placeholder="Masukkan Password Anda" required>
            </div>
            <div class="flex items-center justify-between mt-6">
                <button type="submit" class="w-full px-4 py-2 bg-black text-white rounded-md hover:bg-gray-800 focus:ring-2 focus:ring-black transition ease-in-out duration-300">
                    Login
                </button>
            </div>
        </form>

        <!-- link register -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('admin.register') }}" class="text-black hover:underline">Daftar di sini</a>
            </p>
        </div>
    </div>
</div>
@endsection
