@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_penyerahan_anaks->isEmpty() && $form_pernikahans->isEmpty() && $form_baptisans->isEmpty())
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
                            <img src="{{ asset('storage/' . $item1->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover">
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
        
        <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Pernikahan</h2>
        <a href="{{ route('manajemenJemaat.create2') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>

        <table class="min-w-full bg-white border rounded-lg shadow-md">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Hari Pemberkatan</th>
                    <th class="py-2 px-4 border-b">Tanggal Pemberkatan</th>
                    <th class="py-2 px-4 border-b">Pukul Pemberkatan</th>
                    <th class="py-2 px-4 border-b">Tipe Acara</th>
                    <th class="py-2 px-4 border-b">Nama Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Alamat Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Tempat Lahir Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Tanggal Lahir Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nomor KTP Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nomor Surat Baptis Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Asal Gereja Baptis Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Gereja domisili Calon Mempelai Pria</th>                    
                    <th class="py-2 px-4 border-b">Pekerjaan Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Alamat Pekerjaan Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Pekerjaan Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nama Ayah Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nama Ibu Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Alamat Orang Tua Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Orang Tua Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Persetujuan Orang Tua</th>
                    <th class="py-2 px-4 border-b">Riwayat Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Status Calon Mempelai Pria</th>
                    <th class="py-2 px-4 border-b">Nama Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Alamat Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Tempat Lahir Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Tanggal Lahir Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nomor KTP Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nomor Surat Baptis Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Asal Gereja Baptis Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Gereja domisili Calon Mempelai Wanita</th>                    
                    <th class="py-2 px-4 border-b">Pekerjaan Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Alamat Pekerjaan Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Pekerjaan Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nama Ayah Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nama Ibu Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Alamat Orang Tua Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Nomor Telepon Orang Tua Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Persetujuan Orang Tua</th>
                    <th class="py-2 px-4 border-b">Riwayat Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Status Calon Mempelai Wanita</th>
                    <th class="py-2 px-4 border-b">Status Surat Nikah</th>
                    <th class="py-2 px-4 border-b">File Surat Nikah</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                    

                
                    
                </tr>
            </thead>
            <tbody>
                @foreach($form_pernikahans as $item2)
                <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{ $item2->hari_pemberkatan }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->tanggal_pemberkatan }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->pukul_pemberkatan }}</td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->permohonan_pemberkatan1 == true)
                            <p>Liturgi Acara Kebaktian</p>
                        @elseif($item2->permohonan_pemberkatan2 == true)
                            <p>Pemberkatan Saja</p>
                        @else
                            <p>Belum Mengkonfirmasi</p>
                            
                        @endif
                        <td class="py-2 px-4 border-b">{{ $item2->nama_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_telp_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->tempat_lahir_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->tanggal_lahir_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_ktp_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_surat_baptis_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->asal_gereja_baptis_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->gereja_sekarang_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->pekerjaan_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_pekerjaan_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->telp_pekerjaan_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nama_ayah_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nama_ibu_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_orangtua_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_telp_orangtua_calon_mempelai_pria }}</td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->persetujuan_orangtua_calon_mempelai_pria == true)
                            <p>Disetujui</p>
                        @else
                            <p>Belum Disetujui</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->riwayat_calon_mempelai_pria == true)
                            <p>Sudah Pernah Menikah</p>
                        @else
                            <p>Belum Pernah Menikah</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->status_calon_mempelai_pria == true)
                            <p>Sudah Berkumpul Bersama</p>
                        @else
                            <p>Belum Berkumpul Bersama</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">{{ $item2->nama_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_telp_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->tempat_lahir_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->tanggal_lahir_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_ktp_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_surat_baptis_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->asal_gereja_baptis_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->gereja_sekarang_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->pekerjaan_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_pekerjaan_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->telp_pekerjaan_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nama_ayah_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nama_ibu_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->alamat_orangtua_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">{{ $item2->nomor_telp_orangtua_calon_mempelai_wanita }}</td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->persetujuan_orangtua_calon_mempelai_wanita == true)
                            <p>Disetujui</p>
                        @else
                            <p>Belum Disetujui</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->riwayat_calon_mempelai_wanita == true)
                            <p>Sudah Pernah Menikah</p>
                        @else
                            <p>Belum Pernah Menikah</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if ($item2->status_calon_mempelai_wanita == true)
                            <p>Sudah Berkumpul Bersama</p>
                        @else
                            <p>Belum Berkumpul Bersama</p>
                            
                        @endif 
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if($item2->cek_surat_sipil == true)
                            <p>Sudah Mengurus</p>
                            
                        @else
                            <p>Belum Mengurus</p>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if($item2->file_surat_catatan_sipil)
                        <a href="{{ asset('storage/' . $item2->file_surat_catatan_sipil) }}" target="_blank">Lihat PDF</a>
                        @else
                            <p>Belum Ada</p>
                        @endif   
                    </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('form2.edit', $item2->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('manajemenJemaat.destroy', $item2->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
                            <img src="{{ asset('storage/' . $item3->file_foto_pemohon_baptis) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover">
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
