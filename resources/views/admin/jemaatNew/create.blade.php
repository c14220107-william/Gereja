@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Manajemen Jemaat</h1>
<form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="hidden" name="form_type" value="penyerahan_anak">
    
    <div>
        <label for="nama_jemaat" class="block font-medium text-gray-700">Nama:</label>
        <input type="text" id="nama_jemaat" name="nama_jemaat" placeholder="Nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="jenis_kelamin" class="block font-medium text-gray-700">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_jemaat" class="block font-medium text-gray-700">Nomor Telepon:</label>
        <input type="text" id="nomor_telp_jemaat" name="nomor_telp_jemaat_anak" placeholder="Nomor Telepon" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tempat_lahir" class="block font-medium text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_lahir_anak" class="block font-medium text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir_anak" name="tanggal_lahir_anak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Submit</button>
</form>

<script>
    
    function toggleInput(inputId1,inputId2) {
        const inputField1 = document.getElementById(inputId1);
        inputField1.classList.toggle('hidden');
        const inputField2 = document.getElementById(inputId2);
        inputField2.classList.toggle('hidden');
        // Menampilkan atau menyembunyikan input
    }
</script>
@endsection