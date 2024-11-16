@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full items-start justify-center bg-gray-900 bg-blend-exclusion" style="background-image: url({{ asset('img/fotodalam.JPG') }}); background-size: cover; background-position: center;">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">

        {{-- Pesan Sukses --}}
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{-- Jika Data Kosong --}}
        @if($manajemen_jemaat->isEmpty())
            <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
        @else
            <div class="col-span-3">
                <h2 class="text-2xl font-semibold mb-6">Daftar Jemaat</h2>
                <a href="{{ route('manajemenJemaat.create1') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah baru</a>

                <table class="min-w-full bg-white border rounded-lg shadow-md">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Jenis Kelamin</th>
                            <th class="py-2 px-4 border-b">Nomor Telepon</th>
                            <th class="py-2 px-4 border-b">Tempat Lahir</th>
                            <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                            <th class="py-2 px-4 border-b">Alamat</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($manajemen_jemaat as $item)
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b">{{ $item->nama }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->jenis_kelamin }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->nomor_telp }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->tempat_lahir }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->tanggal_lahir }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->alamat }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('form1.edit', ['id' => $item->id]) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('manajemenJemaat.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</div>
@endsection