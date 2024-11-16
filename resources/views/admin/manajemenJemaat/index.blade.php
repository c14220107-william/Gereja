@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_penyerahan_anaks->isEmpty())
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    @else
         <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Penyerahan Anak</h2>
         <a href="{{ route('manajemenJemaat.create1') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>

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
                    <th class="py-2 px-4 border-b">Kelurahan</th>
                    <th class="py-2 px-4 border-b">Kecamatan</th>                    
                    <th class="py-2 px-4 border-b">Pas Foto</th>
                    <th class="py-2 px-4 border-b">Asal Gereja</th>
                    <th class="py-2 px-4 border-b">Lama Ibadah</th>
                    <th class="py-2 px-4 border-b">Tempat Asal Dibaptis</th>
                    <th class="py-2 px-4 border-b">Tanggal Dibaptis</th>
                    <th class="py-2 px-4 border-b">Nomor Piagam Pernikahan</th>
                    <th class="py-2 px-4 border-b">Tanggal Pernikahan Orang Tua</th>
                    <th class="py-2 px-4 border-b">Nomor Akte Pernikahan Orang Tua</th>
                    <th class="py-2 px-4 border-b">Tanggal Akte Pernikahan Orang Tua</th>
                    <th class="py-2 px-4 border-b">Tanggal Pengisian Form</th>
                    <th class="py-2 px-4 border-b">Aksi</th>

                
                    
                </tr>
            </thead>
            <tbody>
                @foreach($form_penyerahan_anaks as $item1)
                <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{ $item1->nama_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->nomor_telp_penanggungjawab_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->tempat_lahir_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->tanggal_lahir_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->nama_ayah_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->nama_ibu_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->alamat_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->kelurahan_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item1->kecamatan_anak }}</td>
                    <td class="py-2 px-4 border-b">
                        @if($item1->pas_foto_anak)
                            <a href="{{ asset('storage/' . $item1->pas_foto_anak) }}" target="_blank"><img src="{{ asset('storage/' . $item1->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover"> </a>
                            {{-- <img src="{{ asset('storage/' . $item1->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover"> --}}
                        @else
                            <p>Belum ada foto</p>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">{{ $item1->asal_gereja_anak }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->lama_ibadah_anak }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->tempat_asal_dibaptis }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->tanggal_dibaptis_gereja_lama }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->nomor_piagam_pernikahan_parent }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->tanggal_pernikahan }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->nomor_akte_pernikahan_parent }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->tanggal_akte_pernikahan }}</td>
                        <td class="py-2 px-4 border-b">{{ $item1->created_at }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('form1.edit', ['id' => $item1->id]) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('manajemenJemaat.destroy', $item1->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                            </form>


                        </td>
                    {{-- <td class="py-2 px-4 border-b">
                        <!-- Aksi Edit atau Hapus -->
                        <a href="{{ route('admin.child-registrations.edit', $item1->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('admin.child-registrations.destroy', $item1->id) }}" method="POST" class="inline">
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
