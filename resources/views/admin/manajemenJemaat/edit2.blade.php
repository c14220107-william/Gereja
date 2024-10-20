@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Data Pernikahan</h1>
<form action="{{ route('form2.update', $formPernikahan->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="hari_pemberkatan" class="block font-medium text-gray-700">Hari Pemberkatan:</label>
        <input type="text" id="hari_pemberkatan" name="hari_pemberkatan" value="{{ $formPernikahan->hari_pemberkatan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_pemberkatan" class="block font-medium text-gray-700">Tanggal Pemberkatan:</label>
        <input type="date" id="tanggal_pemberkatan" name="tanggal_pemberkatan" value="{{ $formPernikahan->tanggal_pemberkatan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="pukul_pemberkatan" class="block font-medium text-gray-700">Pukul Pemberkatan:</label>
        <input type="time" id="pukul_pemberkatan" name="pukul_pemberkatan" value="{{ $formPernikahan->pukul_pemberkatan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nama_calon_mempelai_pria" class="block font-medium text-gray-700">Nama Calon Mempelai Pria:</label>
        <input type="text" id="nama_calon_mempelai_pria" name="nama_calon_mempelai_pria" value="{{ $formPernikahan->nama_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_telp_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Telepon Calon Mempelai Pria:</label>
        <input type="text" id="nomor_telp_calon_mempelai_pria" name="nomor_telp_calon_mempelai_pria" value="{{ $formPernikahan->nomor_telp_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="alamat_calon_mempelai_pria" class="block font-medium text-gray-700">Alamat Calon Mempelai Pria:</label>
        <input type="text" id="alamat_calon_mempelai_pria" name="alamat_calon_mempelai_pria" value="{{ $formPernikahan->alamat_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tempat_lahir_calon_mempelai_pria" class="block font-medium text-gray-700">Tempat Lahir Calon Mempelai Pria:</label>
        <input type="text" id="tempat_lahir_calon_mempelai_pria" name="tempat_lahir_calon_mempelai_pria" value="{{ $formPernikahan->tempat_lahir_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_lahir_calon_mempelai_pria" class="block font-medium text-gray-700">Tanggal Lahir Calon Mempelai Pria:</label>
        <input type="date" id="tanggal_lahir_calon_mempelai_pria" name="tanggal_lahir_calon_mempelai_pria" value="{{ $formPernikahan->tanggal_lahir_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_ktp_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor KTP Calon Mempelai Pria:</label>
        <input type="text" id="nomor_ktp_calon_mempelai_pria" name="nomor_ktp_calon_mempelai_pria" value="{{ $formPernikahan->nomor_ktp_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_surat_baptis_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Surat Baptis Calon Mempelai Pria:</label>
        <input type="text" id="nomor_surat_baptis_calon_mempelai_pria" name="nomor_surat_baptis_calon_mempelai_pria" value="{{ $formPernikahan->nomor_surat_baptis_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="asal_gereja_baptis_calon_mempelai_pria" class="block font-medium text-gray-700">Asal Gereja Baptis Calon Mempelai Pria:</label>
        <input type="text" id="asal_gereja_baptis_calon_mempelai_pria" name="asal_gereja_baptis_calon_mempelai_pria" value="{{ $formPernikahan->asal_gereja_baptis_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="gereja_sekarang_calon_mempelai_pria" class="block font-medium text-gray-700">Gereja Sekarang Calon Mempelai Pria:</label>
        <input type="text" id="gereja_sekarang_calon_mempelai_pria" name="gereja_sekarang_calon_mempelai_pria" value="{{ $formPernikahan->gereja_sekarang_calon_mempelai_pria }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <!-- Calon Mempelai Wanita Section -->
    <h2 class="text-xl font-semibold mt-8">Data Calon Mempelai Wanita</h2>
    <div>
        <label for="nama_calon_mempelai_wanita" class="block font-medium text-gray-700">Nama Calon Mempelai Wanita:</label>
        <input type="text" id="nama_calon_mempelai_wanita" name="nama_calon_mempelai_wanita" value="{{ $formPernikahan->nama_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_telp_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Telepon Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_telp_calon_mempelai_wanita" name="nomor_telp_calon_mempelai_wanita" value="{{ $formPernikahan->nomor_telp_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="alamat_calon_mempelai_wanita" class="block font-medium text-gray-700">Alamat Calon Mempelai Wanita:</label>
        <input type="text" id="alamat_calon_mempelai_wanita" name="alamat_calon_mempelai_wanita" value="{{ $formPernikahan->alamat_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tempat_lahir_calon_mempelai_wanita" class="block font-medium text-gray-700">Tempat Lahir Calon Mempelai Wanita:</label>
        <input type="text" id="tempat_lahir_calon_mempelai_wanita" name="tempat_lahir_calon_mempelai_wanita" value="{{ $formPernikahan->tempat_lahir_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_lahir_calon_mempelai_wanita" class="block font-medium text-gray-700">Tanggal Lahir Calon Mempelai Wanita:</label>
        <input type="date" id="tanggal_lahir_calon_mempelai_wanita" name="tanggal_lahir_calon_mempelai_wanita" value="{{ $formPernikahan->tanggal_lahir_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_ktp_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor KTP Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_ktp_calon_mempelai_wanita" name="nomor_ktp_calon_mempelai_wanita" value="{{ $formPernikahan->nomor_ktp_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_surat_baptis_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Surat Baptis Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_surat_baptis_calon_mempelai_wanita" name="nomor_surat_baptis_calon_mempelai_wanita" value="{{ $formPernikahan->nomor_surat_baptis_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="asal_gereja_baptis_calon_mempelai_wanita" class="block font-medium text-gray-700">Asal Gereja Baptis Calon Mempelai Wanita:</label>
        <input type="text" id="asal_gereja_baptis_calon_mempelai_wanita" name="asal_gereja_baptis_calon_mempelai_wanita" value="{{ $formPernikahan->asal_gereja_baptis_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="gereja_sekarang_calon_mempelai_wanita" class="block font-medium text-gray-700">Gereja Sekarang Calon Mempelai Wanita:</label>
        <input type="text" id="gereja_sekarang_calon_mempelai_wanita" name="gereja_sekarang_calon_mempelai_wanita" value="{{ $formPernikahan->gereja_sekarang_calon_mempelai_wanita }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <!-- Checkbox for Civil Letter -->
    <div>
        <label for="cek_surat_sipil" class="inline-flex items-center">
            <input type="checkbox" id="cek_surat_sipil" name="cek_surat_sipil" class="rounded" {{ $formPernikahan->cek_surat_sipil ? 'checked' : '' }}>
            <span class="ml-2">Surat Nikah Sipil Sudah Diterima</span>
        </label>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update Data</button>
</form>
@endsection
