@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold m-4">Edit Baptism Request</h1>
<form action="{{ route('form3.update', $formBaptisan->id) }}" method="POST" class="space-y-4 m-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div>
        <label for="nama_anak" class="block font-medium text-gray-700">Nama Pemohon:</label>
        <input type="text" id="nama_anak" name="nama_anak" value="{{ $formBaptisan->nama_anak }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nomor_telp" class="block font-medium text-gray-700">Nomor Telepon:</label>
        <input type="text" id="nomor_telp" name="nomor_telp" value="{{ $formBaptisan->nomor_telp }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tempat_lahir" class="block font-medium text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $formBaptisan->tempat_lahir }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_lahir" class="block font-medium text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $formBaptisan->tanggal_lahir }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="alamat" class="block font-medium text-gray-700">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ $formBaptisan->alamat }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="kelurahan" class="block font-medium text-gray-700">Kelurahan:</label>
        <input type="text" id="kelurahan" name="kelurahan" value="{{ $formBaptisan->kelurahan }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="asal_gereja" class="block font-medium text-gray-700">Asal Gereja:</label>
        <input type="text" id="beribadah_di" name="beribadah_di" value="{{ $formBaptisan->beribadah_di }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nama_ayah" class="block font-medium text-gray-700">Nama Ayah:</label>
        <input type="text" id="nama_ayah" name="nama_ayah" value="{{ $formBaptisan->nama_ayah }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="nama_ibu" class="block font-medium text-gray-700">Nama Ibu:</label>
        <input type="text" id="nama_ibu" name="nama_ibu" value="{{ $formBaptisan->nama_ibu }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="tanggal_baptis" class="block font-medium text-gray-700">Tanggal Baptis:</label>
        <input type="date" id="tanggal_baptis" name="tanggal_baptis" value="{{ $formBaptisan->tanggal_baptis }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="pembaptis" class="block font-medium text-gray-700">Pendeta/Gembala Pembaptis:</label>
        <input type="text" id="pembaptis" name="pembaptis" value="{{ $formBaptisan->pembaptis }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="file_foto" class="block font-medium text-gray-700">Pas Foto:</label>
        <input type="file" id="file_foto_pemohon_baptis" name="file_foto_pemohon_baptis" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        @if($formBaptisan->file_foto_pemohon_baptis)
            <img src="{{ asset('storage/' . $formBaptisan->file_foto_pemohon_baptis) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover mt-2">
        @else
            <p class="mt-2">Belum ada foto</p>
        @endif
    </div>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update Data</button>
</form>
@endsection
