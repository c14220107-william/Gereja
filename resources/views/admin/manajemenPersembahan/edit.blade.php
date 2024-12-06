@extends('admin.layouts.app')

@section('content')

<div class="container mx-auto p-6">
    <h1 class="text-4xl font-extrabold text-[#000000] text-left mb-1">Edit Data Persembahan</h1>
<form action="{{ route('admin.manajemenPersembahan.update', $persembahan->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="tanggal" class="block text-xl font-medium text-gray-700"> Tanggal </label>
        <input type="date" id="tanggal" name="tanggal" value="{{ $persembahan->tanggal }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="kategori" class="block text-xl font-medium text-gray-700">Kategori</label>
                <select id="kategori" name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" value={{ $persembahan->kategori }}>
                    <option value="Umum">Umum</option>
                    <option value="Youth">Youth</option>
                    <option value="Sekolah_Minggu">Sekolah Minggu</option>
                </select>
    </div>
    <div>
        <label for="jumlah" class="block text-xl font-medium text-gray-700">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah" value="{{ $persembahan->jumlah }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label for="detail" class="block text-xl font-medium text-gray-700">Detail</label>
        <input id="detail" name="detail" value="{{ $persembahan->detail }}" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2" required>
    </div>
    
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update Data</button>
</form>

    

    
</div>




@endsection