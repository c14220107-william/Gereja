@extends('admin.layouts.app')

@section('content')
<h1>Tambah Pelayanan Baru</h1>

<form action="{{ route('services.store') }}" method="POST">
    @csrf
    <div>
        <label for="name" class="block font-medium text-gray-700">Nama Pelayanan:</label>
        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="description" class="block font-medium text-gray-700">Deskripsi:</label>
        <textarea name="description" id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
</form>
@endsection
