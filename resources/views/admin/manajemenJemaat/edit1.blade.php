@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Data Penyerahan Anak</h1>
<form action="{{ route('form1.update', $formPenyerahanAnak->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nama_anak" class="block font-medium text-gray-700">Nama Anak:</label>
        <input type="text" id="nama_anak" name="nama_anak" value="{{ $formPenyerahanAnak->nama_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_telp_penanggungjawab_anak" class="block font-medium text-gray-700">Nomor Telepon:</label>
        <input type="text" id="nomor_telp_penanggungjawab_anak" name="nomor_telp_penanggungjawab_anak" value="{{ $formPenyerahanAnak->nomor_telp_penanggungjawab_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tempat_lahir_anak" class="block font-medium text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir_anak" name="tempat_lahir_anak" value="{{ $formPenyerahanAnak->tempat_lahir_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_lahir_anak" class="block font-medium text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir_anak" name="tanggal_lahir_anak" value="{{ $formPenyerahanAnak->tanggal_lahir_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nama_ayah_anak" class="block font-medium text-gray-700">Nama Ayah:</label>
        <input type="text" id="nama_ayah_anak" name="nama_ayah_anak" value="{{ $formPenyerahanAnak->nama_ayah_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nama_ibu_anak" class="block font-medium text-gray-700">Nama Ibu:</label>
        <input type="text" id="nama_ibu_anak" name="nama_ibu_anak" value="{{ $formPenyerahanAnak->nama_ibu_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="alamat_anak" class="block font-medium text-gray-700">Alamat:</label>
        <input type="text" id="alamat_anak" name="alamat_anak" value="{{ $formPenyerahanAnak->alamat_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="kelurahan_anak" class="block font-medium text-gray-700">Kelurahan:</label>
        <input type="text" id="kelurahan_anak" name="kelurahan_anak" value="{{ $formPenyerahanAnak->kelurahan_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="kecamatan_anak" class="block font-medium text-gray-700">Kecamatan:</label>
        <input type="text" id="kecamatan_anak" name="kecamatan_anak" value="{{ $formPenyerahanAnak->kecamatan_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="asal_gereja_anak" class="block font-medium text-gray-700">Asal Gereja:</label>
        <input type="text" id="asal_gereja_anak" name="asal_gereja_anak" value="{{ $formPenyerahanAnak->asal_gereja_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="lama_ibadah_anak" class="block font-medium text-gray-700">Lama Ibadah:</label>
        <input type="text" id="lama_ibadah_anak" name="lama_ibadah_anak" value="{{ $formPenyerahanAnak->lama_ibadah_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    
    <div>
        <label for="tempat_asal_dibaptis" class="block font-medium text-gray-700">Tempat Asal Dibaptis:</label>
        <input type="text" id="tempat_asal_dibaptis" name="tempat_asal_dibaptis" value="{{ $formPenyerahanAnak->tempat_asal_dibaptis }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_dibaptis_gereja_lama" class="block font-medium text-gray-700">Tanggal Dibaptis:</label>
        <input type="date" id="tanggal_dibaptis_gereja_lama" name="tanggal_dibaptis_gereja_lama" value="{{ $formPenyerahanAnak->tanggal_dibaptis_gereja_lama }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_piagam_pernikahan_parent" class="block font-medium text-gray-700">Nomor Piagam Pernikahan:</label>
        <input type="text" id="nomor_piagam_pernikahan_parent" name="nomor_piagam_pernikahan_parent" value="{{ $formPenyerahanAnak->nomor_piagam_pernikahan_parent }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_pernikahan" class="block font-medium text-gray-700">Tanggal Pernikahan:</label>
        <input type="date" id="tanggal_pernikahan" name="tanggal_pernikahan" value="{{ $formPenyerahanAnak->tanggal_pernikahan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_akte_pernikahan_parent" class="block font-medium text-gray-700">Nomor Akte Pernikahan:</label>
        <input type="text" id="nomor_akte_pernikahan_parent" name="nomor_akte_pernikahan_parent" value="{{ $formPenyerahanAnak->nomor_akte_pernikahan_parent }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_akte_pernikahan" class="block font-medium text-gray-700">Tanggal Akte Pernikahan:</label>
        <input type="date" id="tanggal_akte_pernikahan" name="tanggal_akte_pernikahan" value="{{ $formPenyerahanAnak->tanggal_akte_pernikahan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="pas_foto_anak" class="block font-medium text-gray-700">Pas Foto:</label>
        
        <input type="file" id="pas_foto_anak" name="pas_foto_anak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        @if($formPenyerahanAnak->pas_foto_anak)
            <img src="{{ asset('storage/' . $formPenyerahanAnak->pas_foto_anak) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover mt-2">
        @else
            <p class="mt-2">Belum ada foto</p>
        @endif
    </div>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update Data</button>
</form>
@endsection
