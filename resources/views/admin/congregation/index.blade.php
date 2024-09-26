@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Manajemen Jemaat</h1>
<a href="{{ route('congregation.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah Jemaat</a>
<table class="min-w-full bg-white border border-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telepon</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($congregations as $congregation)
            <tr>
                <td class="px-6 py-4">{{ $congregation->name }}</td>
                <td class="px-6 py-4">{{ $congregation->email }}</td>
                <td class="px-6 py-4">{{ $congregation->phone }}</td>
                <td class="px-6 py-4">{{ $congregation->address }}</td>
                <td class="px-6 py-4 space-x-2">
                    <a href="{{ route('congregation.edit', $congregation->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('congregation.destroy', $congregation->id) }}" method="POST" class="inline-block">
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
