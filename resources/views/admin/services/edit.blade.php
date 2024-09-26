@extends('admin.layouts.app')

@section('content')
<h1>Edit Pelayanan: {{ $service->name }}</h1>

<form action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name" class="block font-medium text-gray-700">Nama Pelayanan:</label>
        <input type="text" name="name" id="name" value="{{ $service->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="description" class="block font-medium text-gray-700">Deskripsi:</label>
        <textarea name="description" id="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ $service->description }}</textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update</button>
</form>
@endsection
