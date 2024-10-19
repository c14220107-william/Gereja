@extends('admin.layouts.header')

@section('content')
<div class="min-h-screen flex items-start justify-center bg-gray-100 py-6 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md mt-8">
        <h1 class="text-2xl font-semibold text-center text-black">Login Admin</h1>
        
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded-md my-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/admin/login') }}" method="POST" class="space-y-6 mt-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-black">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="you@example.com" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-black">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan password anda" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
