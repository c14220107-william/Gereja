@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_baptisans->isEmpty())
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    @else
         
        <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Baptisan Air</h2>

        <a href="{{ route('manajemenJemaat.create3') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>
        {{-- <a href="#" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a> --}}

        <table class="min-w-full bg-white border rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama </th>
                    <th class="py-2 px-4 border-b">Nomor Telepon</th>
                    <th class="py-2 px-4 border-b">Tempat Lahir</th>
                    <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                    <th class="py-2 px-4 border-b">Alamat</th>
                    <th class="py-2 px-4 border-b">Kelurahan</th>
                    <th class="py-2 px-4 border-b">Beribadah Di</th>
                    <th class="py-2 px-4 border-b">Nama Ayah</th>
                    <th class="py-2 px-4 border-b">Nama Ibu</th>
                    <th class="py-2 px-4 border-b">Tanggal Baptis</th>
                    <th class="py-2 px-4 border-b">Gembala Yang Membaptis</th>
                    <th class="py-2 px-4 border-b">Foto</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>

            </thead>
            <tbody>
                @foreach($form_baptisans as $item3)
                <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{ $item3->nama_anak }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->nomor_telp }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->tempat_lahir }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->tanggal_lahir }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->alamat}}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->kelurahan }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->beribadah_di }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->nama_ayah }}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->nama_ibu}}</td>   
                    <td class="py-2 px-4 border-b">{{ $item3->tanggal_baptis}}</td>
                    <td class="py-2 px-4 border-b">{{ $item3->pembaptis}}</td>

                    <td class="py-2 px-4 border-b">
                        @if($item3->file_foto_pemohon_baptis)
                        <a href="{{ asset('storage/' . $item3->file_foto_pemohon_baptis) }}" target="_blank"><img src="{{ asset('storage/' . $item3->file_foto_pemohon_baptis) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover"> </a>
                        @else
                            <p>Belum ada foto</p>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                         <a href="{{ route('form3.edit', $item3->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('manajemenJemaat.destroy', $item3->id) }}" method="POST" class="inline-block">
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
