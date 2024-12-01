@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold m-4">Penyerahan Anak</h1>
<form action="{{ route('Form1.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 m-4">
    @csrf
    <input type="hidden" name="form_type" value="penyerahan_anak">
    
    <div>
        <label for="nama_anak" class="block font-medium text-gray-700">Nama Anak:</label>
        <input type="text" id="nama_anak" name="nama_anak" placeholder="Nama Anak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nomor_telp_penanggungjawab" class="block font-medium text-gray-700">Nomor Telepon:</label>
        <input type="text" id="nomor_telp_penanggungjawab" name="nomor_telp_penanggungjawab_anak" placeholder="Nomor Telepon" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tempat_lahir_anak" class="block font-medium text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir_anak" name="tempat_lahir_anak" placeholder="Tempat Lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="tanggal_lahir_anak" class="block font-medium text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir_anak" name="tanggal_lahir_anak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ayah_anak" class="block font-medium text-gray-700">Nama Ayah:</label>
        <input type="text" id="nama_ayah_anak" name="nama_ayah_anak" placeholder="Nama Ayah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="nama_ibu_anak" class="block font-medium text-gray-700">Nama Ibu:</label>
        <input type="text" id="nama_ibu_anak" name="nama_ibu_anak" placeholder="Nama Ibu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="alamat_anak" class="block font-medium text-gray-700">Alamat:</label>
        <input type="text" id="alamat_anak" name="alamat_anak" placeholder="Alamat" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="kelurahan_anak" class="block font-medium text-gray-700">Kelurahan:</label>
        <input type="text" id="kelurahan_anak" name="kelurahan_anak" placeholder="Kelurahan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="kecamatan_anak" class="block font-medium text-gray-700">Kecamatan:</label>
        <input type="text" id="kecamatan_anak" name="kecamatan_anak" placeholder="Kecamatan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="asal_gereja_anak" class="block font-medium text-gray-700">Asal Gereja:</label>
        <input type="text" id="asal_gereja_anak" name="asal_gereja_anak" placeholder="Asal Gereja" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label for="lama_ibadah_anak" class="block font-medium text-gray-700">Berapa Lama Beribadah:</label>
        <input type="text" id="lama_ibadah_anak" name="lama_ibadah_anak" placeholder="Sudah Berapa Lama Beribadah (..thn)" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <div>
        <label class="block font-medium text-gray-700">Apakah Suami & Istri sudah dibaptis?</label>
        <input type="checkbox" id="childDedication" name="services1" value="childDedication" class="mr-2" onclick="toggleInput('tempat_asal_dibaptis', 'tanggal_dibaptis_gereja_lama')">
        <label for="childDedication" class="text-gray-700">Ya</label>
        <input type="text" id="tempat_asal_dibaptis" name="tempat_asal_dibaptis" class="hidden border rounded-md w-full" placeholder="Dimana?">
        <input type="date" id="tanggal_dibaptis_gereja_lama" name="tanggal_dibaptis_gereja_lama" class="hidden border rounded-md w-full mt-2" placeholder="Masukkan tanggal baptisan">
    </div>

    <div>
        <label class="block font-medium text-gray-700">Apakah Suami&Istri sudah diberkati dalam nikah gereja?</label>
        <input type="checkbox" id="childDedication2" name="services2" value="childDedication2" class="mr-2" onclick="toggleInput('nomor_piagam_pernikahan_parent','tanggal_pernikahan')">
        <label for="childDedication2" class="text-gray-700">Ya</label>
        <input type="text" id="nomor_piagam_pernikahan_parent" name="nomor_piagam_pernikahan_parent" class="hidden border rounded-md w-full" placeholder="nomor_piagam_pernikahan_parent">
        <input type="date" id="tanggal_pernikahan" name="tanggal_pernikahan" class="hidden border rounded-md w-full mt-2" placeholder="Masukkan tanggal baptisan">
    </div>

    <div>
        <label class="block font-medium text-gray-700">Apakah Suami&Istri sudah mengurus akte pernikahan di catatan sipil?</label>
        <input type="checkbox" id="childDedication3" name="services3" value="childDedication3" class="mr-2" onclick="toggleInput('nomor_akte_pernikahan_parent','tanggal_akte_pernikahan')">
        <label for="childDedication3" class="text-gray-700">Ya</label>
        <input type="text" id="nomor_akte_pernikahan_parent" name="nomor_akte_pernikahan_parent" class="hidden border rounded-md w-full" placeholder="Nomor Akte Pernikahan Gereja">
        <input type="date" id="tanggal_akte_pernikahan" name="tanggal_akte_pernikahan" class="hidden border rounded-md w-full mt-2" placeholder="Masukkan detail tambahan">
    </div>

    <div>
        <label for="pas_foto_anak" class="block font-medium text-gray-700">Pas Foto 4x6cm:</label>
        <input type="file" id="pas_foto_anak" name="pas_foto_anak" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>

    <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 confirmation-button">Submit</button>
</form>

<script>
    // function toggleInput(...ids) {
    //     ids.forEach(id => {
    //         const element = document.getElementById(id);
    //         element.classList.toggle('hidden');
    //     });
    // }

    function toggleInput(inputId1,inputId2) {
        const inputField1 = document.getElementById(inputId1);
        inputField1.classList.toggle('hidden');
        const inputField2 = document.getElementById(inputId2);
        inputField2.classList.toggle('hidden');
        // Menampilkan atau menyembunyikan input
    }
</script>
@endsection
