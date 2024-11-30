@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Pernikahan Request</h1>
<form action="{{ route('Form2.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="hidden" name="form_type" value="pernikahan">
    
    <div>
        <label for="hari_pemberkatan" class="block font-medium text-gray-700">Hari Pemberkatan:</label>
        <input type="text" id="hari_pemberkatan" name="hari_pemberkatan" placeholder="Hari Pemberkatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    
    <div>
        <label for="tanggal_pemberkatan" class="block font-medium text-gray-700">Tanggal Pemberkatan:</label>
        <input type="date" id="tanggal_pemberkatan" name="tanggal_pemberkatan" placeholder="Tanggal Pemberkatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="pukul_pemberkatan" class="block font-medium text-gray-700">Pukul Pemberkatan:</label>
        <input type="time" id="pukul_pemberkatan" name="pukul_pemberkatan" placeholder="Pukul Pemberkatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    

    <div>
        <label for="permohonan_pemberkatan1" class="block font-medium text-gray-700">Liturgi (Acara Kebaktian):</label>
        <input type="checkbox" id="permohonan_pemberkatan1" name="permohonan_pemberkatan1" placeholder="Pukul Pemberkatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="permohonan_pemberkatan2" class="block font-medium text-gray-700">Pemberkatan Saja:</label>
        <input type="checkbox" id="permohonan_pemberkatan2" name="permohonan_pemberkatan2" placeholder="Pukul Pemberkatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>



    <div>
        <label for="nama_calon_mempelai_pria" class="block font-medium text-gray-700">Nama Calon Mempelai Pria:</label>
        <input type="text" id="nama_calon_mempelai_pria" name="nama_calon_mempelai_pria" placeholder="Nama Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Telepon Calon Mempelai Pria:</label>
        <input type="text" id="nomor_telp_calon_mempelai_pria" name="nomor_telp_calon_mempelai_pria" placeholder="Nomor Telepon Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_calon_mempelai_pria" class="block font-medium text-gray-700">Alamat Calon Mempelai Pria:</label>
        <input type="text" id="alamat_calon_mempelai_pria" name="alamat_calon_mempelai_pria" placeholder="Alamat Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tempat_lahir_calon_mempelai_pria" class="block font-medium text-gray-700">Tempat Lahir Calon Mempelai Pria:</label>
        <input type="text" id="tempat_lahir_calon_mempelai_pria" name="tempat_lahir_calon_mempelai_pria" placeholder="Tempat Lahir Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_lahir_calon_mempelai_pria" class="block font-medium text-gray-700">Tanggal Lahir Calon Mempelai Pria:</label>
        <input type="date" id="tanggal_lahir_calon_mempelai_pria" name="tanggal_lahir_calon_mempelai_pria" placeholder="Tanggal Lahir Calon Mempelai Pria:" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_ktp_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor KTP Calon Mempelai Pria:</label>
        <input type="text" id="nomor_ktp_calon_mempelai_pria" name="nomor_ktp_calon_mempelai_pria" placeholder="Nomor KTP Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_surat_baptis_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Surat Baptis Calon Mempelai Pria:</label>
        <input type="text" id="nomor_surat_baptis_calon_mempelai_pria" name="nomor_surat_baptis_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="asal_gereja_baptis_calon_mempelai_pria" class="block font-medium text-gray-700">Asal Gereja Baptis Calon Mempelai Pria:</label>
        <input type="text" id="asal_gereja_baptis_calon_mempelai_pria" name="asal_gereja_baptis_calon_mempelai_pria" placeholder="Asal Gereja Baptis Calon Mempelai Pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="gereja_sekarang_calon_mempelai_pria" class="block font-medium text-gray-700">Gereja Sekarang Calon Mempelai Pria:</label>
        <input type="text" id="gereja_sekarang_calon_mempelai_pria" name="gereja_sekarang_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="pekerjaan_calon_mempelai_pria" class="block font-medium text-gray-700">Pekerjaan Calon Mempelai Pria:</label>
        <input type="text" id="pekerjaan_calon_mempelai_pria" name="pekerjaan_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_pekerjaan_calon_mempelai_pria" class="block font-medium text-gray-700">Alamat Pekerjaan Calon Mempelai Pria:</label>
        <input type="text" id="alamat_pekerjaan_calon_mempelai_pria" name="alamat_pekerjaan_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="telp_pekerjaan_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Telepon Kantor Calon Mempelai Pria:</label>
        <input type="text" id="telp_pekerjaan_calon_mempelai_pria" name="telp_pekerjaan_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>


    <div>
        <label for="nama_ayah_calon_mempelai_pria" class="block font-medium text-gray-700">Nama Ayah Calon Mempelai Pria:</label>
        <input type="text" id="nama_ayah_calon_mempelai_pria" name="nama_ayah_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ibu_calon_mempelai_pria" class="block font-medium text-gray-700">Nama Ibu Calon Mempelai Pria:</label>
        <input type="text" id="nama_ibu_calon_mempelai_pria" name="nama_ibu_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_orangtua_calon_mempelai_pria" class="block font-medium text-gray-700">Alamat Orang Tua Calon Mempelai Pria:</label>
        <input type="text" id="alamat_orangtua_calon_mempelai_pria" name="alamat_orangtua_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_orangtua_calon_mempelai_pria" class="block font-medium text-gray-700">Nomor Telepon Orang Tua Calon Mempelai Pria:</label>
        <input type="text" id="nomor_telp_orangtua_calon_mempelai_pria" name="nomor_telp_orangtua_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="persetujuan_orangtua_calon_mempelai_pria" class="block font-medium text-gray-700">Persetujuan Orang Tua Calon Mempelai Pria:</label>
        <input type="checkbox" id="persetujuan_orangtua_calon_mempelai_pria" name="persetujuan_orangtua_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="riwayat_calon_mempelai_pria" class="block font-medium text-gray-700">Riwayat Calon Mempelai Pria:</label>
        <input type="checkbox" id="riwayat_calon_mempelai_pria" name="riwayat_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="status_calon_mempelai_pria" class="block font-medium text-gray-700">Status Calon Mempelai Pria:</label>
        <input type="checkbox" id="status_calon_mempelai_pria" name="status_calon_mempelai_pria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_calon_mempelai_wanita" class="block font-medium text-gray-700">Nama Calon Mempelai Wanita:</label>
        <input type="text" id="nama_calon_mempelai_wanita" name="nama_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Telepon Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_telp_calon_mempelai_wanita" name="nomor_telp_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_calon_mempelai_wanita" class="block font-medium text-gray-700">Alamat Calon Mempelai Wanita:</label>
        <input type="text" id="alamat_calon_mempelai_wanita" name="alamat_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tempat_lahir_calon_mempelai_wanita" class="block font-medium text-gray-700">Tempat Lahir Calon Mempelai Wanita:</label>
        <input type="text" id="tempat_lahir_calon_mempelai_wanita" name="tempat_lahir_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_lahir_calon_mempelai_wanita" class="block font-medium text-gray-700">Tanggal Lahir Calon Mempelai Wanita:</label>
        <input type="date" id="tanggal_lahir_calon_mempelai_wanita" name="tanggal_lahir_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_ktp_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor KTP Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_ktp_calon_mempelai_wanita" name="nomor_ktp_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_surat_baptis_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Surat Baptis Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_surat_baptis_calon_mempelai_wanita" name="nomor_surat_baptis_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="asal_gereja_baptis_calon_mempelai_wanita" class="block font-medium text-gray-700">Asal Gereja Baptis Calon Mempelai Wanita:</label>
        <input type="text" id="asal_gereja_baptis_calon_mempelai_wanita" name="asal_gereja_baptis_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="gereja_sekarang_calon_mempelai_wanita" class="block font-medium text-gray-700">Gereja Sekarang Calon Mempelai Wanita:</label>
        <input type="text" id="gereja_sekarang_calon_mempelai_wanita" name="gereja_sekarang_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="pekerjaan_calon_mempelai_wanita" class="block font-medium text-gray-700">Pekerjaan Calon Mempelai Wanita:</label>
        <input type="text" id="pekerjaan_calon_mempelai_wanita" name="pekerjaan_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_pekerjaan_calon_mempelai_wanita" class="block font-medium text-gray-700">Alamat Pekerjaan Calon Mempelai Wanita:</label>
        <input type="text" id="alamat_pekerjaan_calon_mempelai_wanita" name="alamat_pekerjaan_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="telp_pekerjaan_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Telepon Kantor Calon Mempelai Wanita:</label>
        <input type="text" id="telp_pekerjaan_calon_mempelai_wanita" name="telp_pekerjaan_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ayah_calon_mempelai_wanita" class="block font-medium text-gray-700">Nama Ayah Calon Mempelai Wanita:</label>
        <input type="text" id="nama_ayah_calon_mempelai_wanita" name="nama_ayah_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ibu_calon_mempelai_wanita" class="block font-medium text-gray-700">Nama Ibu Calon Mempelai Wanita:</label>
        <input type="text" id="nama_ibu_calon_mempelai_wanita" name="nama_ibu_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_orangtua_calon_mempelai_wanita" class="block font-medium text-gray-700">Alamat Orang Tua Calon Mempelai Wanita:</label>
        <input type="text" id="alamat_orangtua_calon_mempelai_wanita" name="alamat_orangtua_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_orangtua_calon_mempelai_wanita" class="block font-medium text-gray-700">Nomor Telepon Orang Tua Calon Mempelai Wanita:</label>
        <input type="text" id="nomor_telp_orangtua_calon_mempelai_wanita" name="nomor_telp_orangtua_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="persetujuan_orangtua_calon_mempelai_wanita" class="block font-medium text-gray-700">Persetujuan Orang Tua Calon Mempelai Wanita:</label>
        <input type="checkbox" id="persetujuan_orangtua_calon_mempelai_wanita" name="persetujuan_orangtua_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="riwayat_calon_mempelai_wanita" class="block font-medium text-gray-700">Riwayat Calon Mempelai Wanita:</label>
        <input type="checkbox" id="riwayat_calon_mempelai_wanita" name="riwayat_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="status_calon_mempelai_wanita" class="block font-medium text-gray-700">Status Calon Mempelai Wanita:</label>
        <input type="checkbox" id="status_calon_mempelai_wanita" name="status_calon_mempelai_wanita" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="cek_surat_sipil" class="block font-medium text-gray-700">Cek Surat Sipil:</label>
        <input type="checkbox" id="cek_surat_sipil" name="cek_surat_sipil" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="file_surat_catatan_sipil" class="block font-medium text-gray-700">File Surat Catatan Sipil:</label>
        <input type="file" id="file_surat_catatan_sipil" name="file_surat_catatan_sipil" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>


    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 confirmation-button">Submit</button>
</form>
@endsection
