@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Penyerahan Anak</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_penyerahan_anaks->isEmpty())
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    @else
        <table class="min-w-full bg-white border rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama Anak</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon</th>
                    <th class="py-2 px-4 border-b">Tempat Lahir</th>
                    <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                    <th class="py-2 px-4 border-b">Nama Ayah</th>
                    <th class="py-2 px-4 border-b">Nama Ibu</th>
                    <th class="py-2 px-4 border-b">Alamat</th>
                    <th class="py-2 px-4 border-b">Pas Foto</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($form_penyerahan_anaks as $item)
                <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{ $item->nama_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->nomor_telp_penanggungjawab_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->tempat_lahir_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->tanggal_lahir_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->nama_ayah_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->nama_ibu_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->alamat_anak }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($item->pas_foto_anak)
                            <img src="{{ asset('storage/' . $item->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover">
                        @else
                            <p>Belum ada foto</p>
                        @endif
                    </td>
                    {{-- <td class="py-2 px-4 border-b">
                        <!-- Aksi Edit atau Hapus -->
                        <a href="{{ route('admin.child-registrations.edit', $item->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('admin.child-registrations.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
