@extends('admin.layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
@if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif
<div class="container mx-auto py-6" style="background-color: #F4F4F4;">
    

    @if($form_pernikahans->isEmpty())
    <div class="items-center">
        <h2 class="text-2xl font-semibold m-4">Manajemen Jemaat - Pendaftaran Pernikahan</h2>
        <a href="{{ route('manajemenJemaat.create2') }}" class=" m-4 px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-black">Tambah secara manual</a>
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    </div>
    
    @else
    <div>
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold m-4">Manajemen Jemaat - Pendaftaran Pernikahan</h2>
            <a href="{{ route('manajemenJemaat.create2') }}" class="m-4 inline-block px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-black">Tambah secara manual</a>
        </div>
        <input 
            type="text" 
            id="searchInput" 
            placeholder="Cari nama Calon Mempelai..." 
            class="m-4 px-4 border w-[97%] border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>

    <section class=" mx-4 mb-4 p-4 bg-white shadow-xl rounded-xl h-screen">
            <!-- Tabel Pernikahan -->
            <div class="rounded-xl shadow-lg overflow-hidden bg-white">
                <table class="min-w-full table-auto border-collapse border border-gray-300">
                    <thead class="bg-[#333333]">
                        <tr>
                            <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">No</th>
                            <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Nama Calon Mempelai Pria</th>
                            <th class="py-4 px-3 text-left font-semibold uppercase text-white tracking-wide">Nama Calon Mempelai Wantia</th>
                            <th class="py-4 px-3 text-center font-semibold uppercase text-white tracking-wide">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach($form_pernikahans as $index => $item2)
                            <tr>
                                <td class="px-4 py-2 border border-gray-200 text-center">
                                    <button 
                                    class="text-blue-600 font-semibold hover:text-xl hover:underline relative group" 
                                    onclick="openModal('modal-{{ $item2->id }}')">
                                        {{ $index + 1 }}.
                                        <!-- Tooltip -->
                                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 translate-y-2 z-10 hidden group-hover:block bg-gray-800 text-white text-sm rounded-md px-3 py-2 shadow-lg">
                                            Detail informasi
                                        </div>
                                    </button>
                                </td>
                                <td class="px-4 py-2 border border-gray-200">{{ $item2->nama_calon_mempelai_pria }}
                                </td>
                                <td class="px-4 py-2 border border-gray-200 text-center">{{ $item2->nama_calon_mempelai_wanita }}</td>
                                <td class="px-4 py-2 border border-gray-200 flex justify-center items-center gap-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('form2.edit', ['id' => $item2->id]) }}" 
                                    class="px-3 py-1 w-10 m-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 flex items-center justify-center">
                                        <i class="fas fa-pencil-alt"></i> <!-- Ikon Pensil -->
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('manajemenJemaat.destroy', $item2->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-3 py-1 m-2 bg-red-500 text-white rounded-md hover:bg-red-600 flex items-center justify-center">
                                            <i class="fas fa-trash-alt"></i> <!-- Ikon Tong Sampah -->
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Modal -->
            @foreach($form_pernikahans as $item2)
        <div id="modal-{{ $item2->id }}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden px-4">                   
            <div class="bg-white rounded-lg w-11/12 md:w-2/3 lg:w-1/2 max-h-[90vh] overflow-y-auto p-6 shadow-lg relative">
                <!-- Tombol Silang -->
                <button 
                    onclick="closeModal('modal-{{ $item2->id }}')" 
                    class="absolute top-3 right-3 text-gray-600 hover:text-gray-800 text-4xl font-semibold">
                    &times;
                </button>

                <!-- Header Nama -->
                <div class="text-center mb-6">
                    <h3 class="text-3xl font-bold">Detail Informasi Pernikahan</h3>
                    <h1 class="text-lg text-gray-600">{{ $item2->nama_calon_mempelai_pria }} & {{ $item2->nama_calon_mempelai_wanita }}</h1>
                </div>

                <!-- Detail Informasi -->
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Hari Pemberkatan:</span>
                        <span class="ml-2 w-2/3">{{ $item2->hari_pemberkatan }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Tanggal Pemberkatan:</span>
                        <span class="ml-2 w-2/3">{{ $item2->tanggal_pemberkatan }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Jam Pemberkatan:</span>
                        <span class="ml-2 w-2/3">{{ $item2->pukul_pemberkatan }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Tipe Acara:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->permohonan_pemberkatan1 == true)
                                <p>Liturgi Acara Kebaktian</p>
                            @elseif($item2->permohonan_pemberkatan2 == true)
                                <p>Pemberkatan Saja</p>
                            @else
                                <p>Belum Mengkonfirmasi</p>
                                
                            @endif
                        </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Tempat & Tanggal lahir pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->tempat_lahir_calon_mempelai_pria }}, {{ $item2->tanggal_lahir_calon_mempelai_pria }} </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor KTP Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_ktp_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Surat Baptis Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_surat_baptis_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Asal Gereja Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->asal_gereja_baptis_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Gereja Domisili Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->gereja_sekarang_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Pekerjaan Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->pekerjaan_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Alamat Pekerjaan Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->alamat_pekerjaan_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Telepon Pekerjaan Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->telp_pekerjaan_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nama Ayah Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nama_ayah_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nama Ibu Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nama_ibu_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Alamat Orang Tua Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->alamat_orangtua_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Telepon Orang Tua Pria:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_telp_orangtua_calon_mempelai_pria }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Persetujuan Orang Tua Pria:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->persetujuan_orangtua_calon_mempelai_pria == true)
                                <p>Disetujui</p>
                            @else
                                <p>Belum Disetujui</p>
                            @endif </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Riwayat Pria:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->riwayat_calon_mempelai_pria == true)
                                <p>Sudah Pernah Menikah</p>
                            @else
                                <p>Belum Pernah Menikah</p>
                                
                            @endif 
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Status Pria:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->status_calon_mempelai_pria == true)
                                <p>Sudah Berkumpul Bersama</p>
                            @else
                                <p>Belum Berkumpul Bersama</p>
                                
                            @endif 
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Tempat & Tanggal lahir wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->tempat_lahir_calon_mempelai_wanita }}, {{ $item2->tanggal_lahir_calon_mempelai_wanita }} </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor KTP Wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_ktp_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Surat Baptis Wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_surat_baptis_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Asal Gereja Wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->asal_gereja_baptis_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Gereja Domisili Wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->gereja_sekarang_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Pekerjaan Wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->pekerjaan_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Alamat Pekerjaan wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->alamat_pekerjaan_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Telepon Pekerjaan wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->telp_pekerjaan_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nama Ayah wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nama_ayah_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nama Ibu wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nama_ibu_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Alamat Orang Tua wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->alamat_orangtua_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Nomor Telepon Orang Tua wanita:</span>
                        <span class="ml-2 w-2/3">{{ $item2->nomor_telp_orangtua_calon_mempelai_wanita }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Persetujuan Orang Tua wanita:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->persetujuan_orangtua_calon_mempelai_wanita == true)
                                <p>Disetujui</p>
                            @else
                                <p>Belum Disetujui</p>
                            @endif </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Riwayat wanita:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->riwayat_calon_mempelai_wanita == true)
                                <p>Sudah Pernah Menikah</p>
                            @else
                                <p>Belum Pernah Menikah</p>
                                
                            @endif 
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">Status wanita:</span>
                        <span class="ml-2 w-2/3">
                            @if ($item2->status_calon_mempelai_wanita == true)
                                <p>Sudah Berkumpul Bersama</p>
                            @else
                                <p>Belum Berkumpul Bersama</p>
                                
                            @endif 
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="font-semibold w-1/3">File Surat Catatan Sipil:</span>
                        <span class="ml-2 w-2/3">
                            @if($item2->file_surat_catatan_sipil)
                            <a href="{{ asset('storage/' . $item2->file_surat_catatan_sipil) }}" target="_blank">Lihat PDF</a>
                            @else
                                <p>Belum Ada</p>
                            @endif  
                        </span>
                    </div>
                    
                </div>
                
                <!-- Tombol Edit dan Hapus -->
                <div class="mt-6 flex justify-between">
                    <!-- Tombol Edit -->
                    <a href="{{ route('form2.edit', ['id' => $item2->id]) }}" 
                    class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 flex items-center">
                        <i class="fas fa-pencil-alt"></i> <!-- Ikon Pensil -->
                    </a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('manajemenJemaat.destroy', $item2->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 flex items-center">
                            <i class="fas fa-trash-alt"></i> <!-- Ikon Tong Sampah -->
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    document.getElementById('searchInput').addEventListener('keyup', function () {
        const searchQuery = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('#tableBody tr');

        tableRows.forEach(row => {
        const groomCell = row.querySelector('td:nth-child(2)'); // Kolom nama mempelai pria
        const brideCell = row.querySelector('td:nth-child(3)'); // Kolom nama mempelai wanita
        
        if (groomCell || brideCell) {
            const groomName = groomCell ? groomCell.textContent.toLowerCase() : '';
            const brideName = brideCell ? brideCell.textContent.toLowerCase() : '';

            // Periksa apakah nama mempelai pria atau wanita mengandung query
            if (groomName.includes(searchQuery) || brideName.includes(searchQuery)) {
                row.style.display = ''; // Tampilkan baris
            } else {
                row.style.display = 'none'; // Sembunyikan baris
            }
        }
        });
    });
</script>
        
@endsection
