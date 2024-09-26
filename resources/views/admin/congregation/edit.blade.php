@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Jemaat</h1>
<form action="{{ route('congregation.update', $congregation->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label for="name" class="block font-medium text-gray-700">Nama:</label>
        <input type="text" id="name" name="name" value="{{ $congregation->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="email" class="block font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" value="{{ $congregation->email }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="phone" class="block font-medium text-gray-700">Telepon:</label>
        <input type="text" id="phone" name="phone" value="{{ $congregation->phone }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="address" class="block font-medium text-gray-700">Alamat:</label>
        <input type="text" id="address" name="address" value="{{ $congregation->address }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update Jemaat</button>
</form>
@endsection
