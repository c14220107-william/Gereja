@extends('admin.layouts.app')

@section('content')
<h1>Daftar Pelayanan Gereja</h1>

<a href="{{ route('services.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah Pelayanan Baru</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table  class="min-w-full bg-white border border-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('services.edit', $service->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
