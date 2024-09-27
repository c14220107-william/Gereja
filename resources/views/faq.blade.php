@extends('layouts.app')

@section('content')

<section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Pertanyaan yang Sering Diajukan (FAQ)</h2>

        <div class="max-w-3xl mx-auto">
            <!-- FAQ Content as Before -->
        </div>
    </div>
</section>

<section id="contact-form" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Kritik Dan Saran</h2>
        <p class="mb-4">Silakan isi formulir di bawah ini untuk mengajukan kritik dan saran kepada kami.</p>

        <form action="/submit-question" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
            @csrf

            <!-- Input Nama -->
            <div class="mb-4" id="nameField">
                <label for="name" class="block text-left text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" placeholder="Masukkan nama lengkap">
            </div>

            <!-- Input Pertanyaan -->
            <div class="mb-4">
                <label for="question" class="block text-left text-gray-700 font-semibold mb-2">Pertanyaan</label>
                <textarea id="question" name="question" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" rows="4" placeholder="Tulis pertanyaan Anda di sini"></textarea>
            </div>

            <!-- Checkbox untuk sembunyikan nama -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="hideName" name="hideName" class="mr-2" onclick="toggleNameField()">
                <label for="hideName" class="text-left text-gray-700 font-semibold">Sembunyikan Nama</label>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700 transition duration-300">Kirim Pertanyaan</button>
        </form>
    </div>
</section>

<script>
    // Fungsi untuk menyembunyikan atau menampilkan input nama
    function toggleNameField() {
        const nameField = document.getElementById('nameField');
        const hideName = document.getElementById('hideName');
        
        if (hideName.checked) {
            nameField.style.display = 'none'; // Sembunyikan input nama
        } else {
            nameField.style.display = 'block'; // Tampilkan input nama
        }
    }
</script>

@endsection
