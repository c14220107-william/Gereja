@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_penyerahan_anaks->isEmpty())
        <a href="{{ route('manajemenJemaat.create1') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>   
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    @else
        <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Penyerahan Anak</h2>
        <a href="{{ route('manajemenJemaat.create1') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>

        <!-- Tabel Daftar Nama Anak -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border border-gray-200">No</th>
                        <th class="px-4 py-2 border border-gray-200">Nama Anak</th>
                        <th class="px-4 py-2 border border-gray-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($form_penyerahan_anaks as $index => $item1)
                        <tr>
                            <td class="px-4 py-2 border border-gray-200 text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border border-gray-200">
                                <button 
                                    class="text-blue-600 font-semibold hover:underline" 
                                    onclick="openModal('modal-{{ $item1->id }}')">
                                    {{ $item1->nama_anak }}
                                </button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200">
                                <a href="{{ route('form1.edit', ['id' => $item1->id]) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('manajemenJemaat.destroy', $item1->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 delete-button">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

<!-- Modal -->
@foreach($form_penyerahan_anaks as $item1)
<div id="modal-{{ $item1->id }}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden px-4">
                       
<div class="bg-white rounded-lg w-11/12 md:w-2/3 lg:w-1/2 max-h-[90vh] overflow-y-auto p-6 shadow-lg relative">
                            <!-- Tombol Silang -->
                            <button 
                                onclick="closeModal('modal-{{ $item1->id }}')" 
                                class="absolute top-3 right-3 text-gray-600 hover:text-gray-800 text-xl font-semibold">
                                &times;
                            </button>

                            <!-- Header Nama -->
                            <div class="text-center mb-6">
                                <h3 class="text-3xl font-bold">Detail Informasi Penyerahan Anak</h3>
                                <h1 class="text-lg text-gray-600">{{ $item1->nama_anak }}</h1>
                            </div>

                            <!-- Detail Informasi -->
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Nomor Telepon:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->nomor_telp_penanggungjawab_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Tempat Lahir:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->tempat_lahir_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Tanggal Lahir:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->tanggal_lahir_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Nama Ayah:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->nama_ayah_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Nama Ibu:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->nama_ibu_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Alamat:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->alamat_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Kelurahan:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->kelurahan_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Kecamatan:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->kecamatan_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Pas Foto:</span>
                                    <span class="ml-2 w-2/3">
                                        @if($item1->pas_foto_anak)
                                            <a href="{{ asset('storage/' . $item1->pas_foto_anak) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $item1->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover mt-2">
                                            </a>
                                        @else
                                            Belum ada foto
                                        @endif
                                    </span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Asal Gereja:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->asal_gereja_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Lama Ibadah:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->lama_ibadah_anak }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold w-1/3">Tanggal Pengisian:</span>
                                    <span class="ml-2 w-2/3">{{ $item1->created_at }}</span>
                                </div>
                            </div>
                            
                            <!-- Tombol Edit dan Hapus -->
                            <div class="mt-6 flex justify-between">
                                <a href="{{ route('form1.edit', ['id' => $item1->id]) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('manajemenJemaat.destroy', $item1->id) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 delete-button">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>
@endsection
