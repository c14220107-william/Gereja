@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Baptism Request</h1>
<form action="{{ route('Form3.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="hidden" name="form_type" value="baptisan">
    
    <div>
        <label for="nama_anak" class="block font-medium text-gray-700">Nama Pemohon:</label>
        <input type="text" id="nama_anak" name="nama_anak" placeholder="Nama Pemohon" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    
    <div>
        <label for="nomor_telp" class="block font-medium text-gray-700">Nomor Telepon:</label>
        <input type="text" id="nomor_telp" name="nomor_telp" placeholder="Nomor Telepon" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tempat_lahir" class="block font-medium text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_lahir" class="block font-medium text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat" class="block font-medium text-gray-700">Alamat:</label>
        <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="kelurahan" class="block font-medium text-gray-700">Kelurahan:</label>
        <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="beribadah_di" class="block font-medium text-gray-700">Asal Gereja:</label>
        <input type="text" id="beribadah_di" name="beribadah_di" placeholder="Asal Gereja" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ayah" class="block font-medium text-gray-700">Nama Ayah:</label>
        <input type="text" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ibu" class="block font-medium text-gray-700">Nama Ibu:</label>
        <input type="text" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_baptis" class="block font-medium text-gray-700">Tanggal Baptis yang Diinginkan:</label>
        <input type="date" id="tanggal_baptis" name="tanggal_baptis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="pembaptis" class="block font-medium text-gray-700">Pendeta/Gembala yang Membaptis:</label>
        <input type="text" id="pembaptis" name="pembaptis" placeholder="Nama Pendeta/Gembala" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="file_foto_pemohon_baptis" class="block font-medium text-gray-700">Pas Foto 4x6cm:</label>
        <input type="file" id="file_foto_pemohon_baptis" name="file_foto_pemohon_baptis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 confirmation-button">Submit</button>
</form>
@endsection
