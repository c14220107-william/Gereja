@extends('layouts.app')

@section('content')

<style>
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .faq-answer.open {
        max-height: 1000px;
        /* Disesuaikan agar sesuai dengan konten */
    }

    /* Fade-in Animations */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Hover Effect */
    button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Active state */
    button:active {
        transform: translateY(0);
        box-shadow: none;
    }
</style>




<section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center fade-in">
        <h2 class="text-4xl font-bold mb-8">Pertanyaan yang Sering Diajukan (FAQ)</h2>

        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq1')">
                    <h3 class="text-xl font-semibold">1. Apa yang perlu saya lakukan untuk bergabung dengan gereja?</h3>
                    <span id="faq1-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq1" class="hidden px-4 pb-4">
                    <p>Anda dapat bergabung dengan gereja kami dengan mengikuti Ibadah kami setiap Minggu.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq2')">
                    <h3 class="text-xl font-semibold">2. Kapan jadwal Ibadah gereja?</h3>
                    <span id="faq2-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq2" class="hidden px-4 pb-4">
                    <p>Ibadah Raya atau Umum kami diadakan setiap hari Minggu pukul 07:45 WIB. Kami juga mengadakan Ibadah lainnya pada jadwal-jadwal tertentu.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq3')">
                    <h3 class="text-xl font-semibold">3. Apakah ada program untuk anak-anak?</h3>
                    <span id="faq3-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq3" class="hidden px-4 pb-4">
                    <p>Ya, kami memiliki program Sekolah Minggu untuk anak-anak selama ibadah. Mereka akan diajarkan nilai-nilai iman melalui aktivitas yang menyenangkan.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq4')">
                    <h3 class="text-xl font-semibold">4. Bagaimana saya bisa terlibat dalam kegiatan gereja?</h3>
                    <span id="faq4-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq4" class="hidden px-4 pb-4">
                    <p>Kami menyambut semua anggota untuk terlibat dalam kegiatan gereja. Silakan hubungi pengurus gereja untuk informasi lebih lanjut tentang pelayanan.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq5')">
                    <h3 class="text-xl font-semibold">5. Di mana gereja ini berada?</h3>
                    <span id="faq5-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq5" class="hidden px-4 pb-4">
                    <p>Gereja kami berlokasi di Jl. Raya Kutisari Indah No.60, Kutisari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur . Anda dapat menggunakan peta di halaman utama kami untuk petunjuk lebih lanjut.</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq6')">
                    <h3 class="text-xl font-semibold">6. Gimana saya bisa bertanya lebih lanjut?</h3>
                    <span id="faq6-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq6" class="hidden px-4 pb-4">
                    <p>Anda bisa menghubungi di kontek kami yaitu di nomor 087703370660 ya.</p>
                </div>
            </div>
            <!-- FAQ Content as Before -->
        </div>
    </div>
</section>

<section id="contact-form" class="py-4 bg-gray-100 fade-in -mt-12">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-2">Ajukan Kritik dan Saran</h2>
        <p class="mb-4">Silakan isi formulir di bawah ini untuk mengajukan kritik dan saran kepada kami.</p>

        <form action="{{ route('kritikSaran.store')}}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8" onsubmit="return validateForm()">
            @csrf

            <!-- Input Nama -->
            <div class="mb-4" id="nameField">
                <label for="name" class="block text-left text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" placeholder="Masukkan Nama Lengkap">
                <p id="nameError" class="text-red-500 text-left hidden mt-2">Nama wajib diisi.</p>
            </div>

            <!-- Input Kritik dan Saran -->
            <div class="mb-4">
                <label for="kritikSaran" class="block text-left text-gray-700 font-semibold mb-2">Kritik dan Saran</label>
                <textarea id="kritikSaran" name="kritikSaran" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" rows="4" placeholder="Tulis Kritik dan Saran Anda di sini"></textarea>
                <p id="kritikSaranError" class="text-red-500 text-left hidden mt-2">Kritik dan Saran wajib diisi.</p>
            </div>

            <!-- Checkbox untuk sembunyikan nama -->
            <div class="flex items-center mb-4">
                <input type="checkbox" id="hideName" name="hideName" class="mr-2" onclick="toggleNameField()">
                <label for="hideName" class="text-left text-gray-700 font-semibold">Sembunyikan Nama</label>
            </div>

            <!-- Tombol Submit -->
            <button type="button" class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700 transition duration-300 confirmation-button  ">Kirim</button>
        </form>
    </div>
</section>

<script>
    
    function toggleAnswer(faqId) {
        const answer = document.getElementById(faqId);
        const toggle = document.getElementById(faqId + '-toggle');

        if (answer.classList.contains('open')) {
            answer.classList.remove('open');
            toggle.textContent = '+';
        }  else {
            answer.classList.add('open');
            toggle.textContent = '-';
        }
    }

    // Fade-in animation on scroll
    document.addEventListener('scroll', function() {
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight;

            if (position < screenPosition) {
                element.classList.add('visible');
            }
        });
    });

    // Trigger fade-in when page is loaded
    window.onload = function() {
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(element => {
            element.classList.add('visible');
        });
    };


    function toggleAnswer(faqId) {
            const answer = document.getElementById(faqId);
            const toggle = document.getElementById(faqId + '-toggle');

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                toggle.textContent = '-';
            } else {
                answer.classList.add('hidden');
                toggle.textContent = '+';
            }
        }
    // Validasi form
    function validateForm() {
        const nameField = document.getElementById('name');
        const kritikSaranField = document.getElementById('kritikSaran');
        const hideName = document.getElementById('hideName');

        // Ambil elemen error
        const nameError = document.getElementById('nameError');
        const kritikSaranError = document.getElementById('kritikSaranError');

        let valid = true;

        // Validasi Nama
        if (!hideName.checked && nameField.value.trim() === '') {
            nameError.classList.remove('hidden');
            valid = false;
        } else {
            nameError.classList.add('hidden');
        }

        // Validasi Kritik dan Saran
        if (kritikSaranField.value.trim() === '') {
            kritikSaranError.classList.remove('hidden');
            valid = false;
        } else {
            kritikSaranError.classList.add('hidden');
        }

        return valid;
    }

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