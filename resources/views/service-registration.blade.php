@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Service Registration</h1>

    <!-- Child Dedication Section -->
    <section class="mb-8 bg-blue-100 p-4 rounded-lg shadow">
        <h2 class="text-2xl font-semibold">Child Dedication</h2>
        <button id="openChildDedicationModal" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Open Form</button>
    </section>

    <!-- Marriage Blessing Section -->
    <section class="mb-8 bg-green-100 p-4 rounded-lg shadow">
        <h2 class="text-2xl font-semibold">Marriage Blessing</h2>
        <button id="openMarriageBlessingModal" class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Open Form</button>
    </section>

    <!-- Baptism Request Section -->
    <section class="mb-8 bg-yellow-100 p-4 rounded-lg shadow">
        <h2 class="text-2xl font-semibold">Baptism Request</h2>
        <button id="openBaptismRequestModal" class="mt-2 bg-yellow-500 text-white px-4 py-2 rounded">Open Form</button>
    </section>

    <!-- Modal for Child Dedication -->
    <div id="childDedicationModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="modal-content bg-white rounded-lg p-6 w-13/14 max-w-[40rem] max-h-[80vh] overflow-y-auto">
            <span class="close text-gray-600 cursor-pointer float-right" id="closeChildDedicationModal">&times;</span>
            <h3 class="text-xl font-semibold mb-4">Penyerahan Anak Form Requirements</h3>
            <p>Isi ketentuan untuk Penyerahan Anak di sini.</p>
            <form action="#" method="POST" class="mt-4">
                <input type="date" name="dedication_date" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="nama_anak" placeholder="Nama" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required class="border rounded p-2 w-full mb-2">
                <input type="date" name="tanggal-lahir" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="nama_ayah" placeholder="Nama Ayah" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="nama_ibu" placeholder="Nama Ibu" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="alamat" placeholder="Alamat" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="kelurahan" placeholder="Kelurahan" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="kecamatan" placeholder="Kecamatan" required class="border rounded p-2 w-full mb-2">        
                <input type="text" name="gereja_lama" placeholder="Gereja Asal" required class="border rounded p-2 w-full mb-2">
                <input type="text" name="lama_ibadah" placeholder="Sudah Berapa Lama Beribadah" required class="border rounded p-2 w-full mb-2">
                <input type="checkbox" id="childDedication" name="services1" value="childDedication" class="mr-2" onclick="toggleInput('childDedicationInput1','childDedicationInput2')">
                <label for="childDedication" class="text-gray-700">Apakah Suami&Istri sudah dibaptis?</label>
                <input type="text" id="childDedicationInput1" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Dimana?"> <input type="date" id="childDedicationInput2" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">
                <p></p>
                <input type="checkbox" id="childDedication2" name="services2" value="childDedication2" class="mr-2" onclick="toggleInput('childDedicationInput3','childDedicationInput4')">
                <label for="childDedication3" class="text-gray-700">Apakah Suami&Istri sudah diberkati dalam nikah gereja?</label>
                <input type="text" id="childDedicationInput3" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Nomor Piagam Pernikahan Gereja"> <input type="date" id="childDedicationInput4" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">
                <p></p>
                <input type="checkbox" id="childDedication3" name="services2" value="childDedication3" class="mr-2" onclick="toggleInput('childDedicationInput5','childDedicationInput6')">
                <label for="childDedication3" class="text-gray-700">Apakah Suami&Istri sudah mengurus akte pernikahan di catatan sipil?</label>
                <input type="text" id="childDedicationInput5" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Nomor Piagam Pernikahan Gereja"> <input type="date" id="childDedicationInput6" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">

                

                <p></p>


                <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded items-center">Submit</button>
            </form>
        </div>
    </div>

    <!-- Modal for Marriage Blessing -->
    <div id="marriageBlessingModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="modal-content bg-white rounded-lg p-6 w-11/12 max-w-md">
            <span class="close text-gray-600 cursor-pointer float-right" id="closeMarriageBlessingModal">&times;</span>
            <h3 class="text-xl font-semibold mb-4">Marriage Blessing Form Requirements</h3>
            <p>Isi ketentuan untuk Marriage Blessing di sini.</p>
            <form action="#" method="POST" class="mt-4">
                <input type="text" name="couple_name" placeholder="Couple Name" required class="border rounded p-2 w-full mb-2">
                <input type="date" name="blessing_date" required class="border rounded p-2 w-full mb-2">
                <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Submit</button>
            </form>
        </div>
    </div>

    <!-- Modal for Baptism Request -->
    <div id="baptismRequestModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="modal-content bg-white rounded-lg p-6 w-11/12 max-w-md">
            <span class="close text-gray-600 cursor-pointer float-right" id="closeBaptismRequestModal">&times;</span>
            <h3 class="text-xl font-semibold mb-4">Baptism Request Form Requirements</h3>
            <p>Isi ketentuan untuk Baptism Request di sini.</p>
            <form action="#" method="POST" class="mt-4">
                <input type="text" name="applicant_name" placeholder="Applicant Name" required class="border rounded p-2 w-full mb-2">
                <input type="date" name="baptism_date" required class="border rounded p-2 w-full mb-2">
                <button type="submit" class="mt-2 bg-yellow-500 text-white px-4 py-2 rounded">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen modal
const childDedicationModal = document.getElementById('childDedicationModal');
const marriageBlessingModal = document.getElementById('marriageBlessingModal');
const baptismRequestModal = document.getElementById('baptismRequestModal');

// Fungsi untuk membuka modal
document.getElementById('openChildDedicationModal').onclick = function() {
    childDedicationModal.classList.remove('hidden');
};

document.getElementById('openMarriageBlessingModal').onclick = function() {
    marriageBlessingModal.classList.remove('hidden');
};

document.getElementById('openBaptismRequestModal').onclick = function() {
    baptismRequestModal.classList.remove('hidden');
};

// Fungsi untuk menutup modal
document.getElementById('closeChildDedicationModal').onclick = function() {
    childDedicationModal.classList.add('hidden');
};

document.getElementById('closeMarriageBlessingModal').onclick = function() {
    marriageBlessingModal.classList.add('hidden');
};

document.getElementById('closeBaptismRequestModal').onclick = function() {
    baptismRequestModal.classList.add('hidden');
};

// Menutup modal saat mengklik di luar konten modal
window.onclick = function(event) {
    if (event.target === childDedicationModal) {
        childDedicationModal.classList.add('hidden');
    }
    if (event.target === marriageBlessingModal) {
        marriageBlessingModal.classList.add('hidden');
    }
    if (event.target === baptismRequestModal) {
        baptismRequestModal.classList.add('hidden');
    }
};
function toggleInput(inputId1,inputId2) {
    const inputField1 = document.getElementById(inputId1);
    inputField1.classList.toggle('hidden');
    const inputField2 = document.getElementById(inputId2);
    inputField2.classList.toggle('hidden');
     // Menampilkan atau menyembunyikan input
}

</script>


@endsection
    