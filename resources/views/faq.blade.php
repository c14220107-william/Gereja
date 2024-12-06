@extends('layouts.app')

@section('content')
<style>
    /* General Styling */
    body {
        font-family: 'Inter', sans-serif;
        background-color: #ffffff;
        color: #000000;
    }

    /* Animasi Fade In */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* FAQ Section Styling */
    .faq-section {
        position: relative;
        background-image: url('{{ asset('img/fotodepangerejacrop.JPG') }}');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        padding: 40px 0;
    }

    .faq-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.8); /* Darker background for better contrast */
        z-index: 1;
    }

    .faq-container {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .faq-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: #ffffff;
    }

    .faq-item {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .faq-item:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .faq-header {
        padding: 18px 25px;
        font-size: 1.3rem;
        font-weight: 600;
        cursor: pointer;
        background-color: #ffffff;
        color: #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #e0e0e0;
        transition: background-color 0.3s ease;
    }

    .faq-header:hover {
        background-color: #f4f4f4;
    }

    .faq-content {
        padding: 20px;
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        background-color: #fafafa;
        display: none;
    }

    .faq-content.open {
        display: block;
    }

    .faq-toggle {
        font-size: 1.6rem;
        font-weight: bold;
        color: #333;
        transition: transform 0.3s ease;
    }

    .faq-toggle.rotate {
        transform: rotate(45deg);
    }

   /* Form Section Styling */
    #contact-form {
        margin-top: 30px;
        padding-top: 40px;
        z-index: 5;
    }

    .form-container {
        background-color: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
        position: relative;
        z-index: 10;
        max-width: 600px;
        margin: 0 auto;
    }

    .form-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
        font-family: 'Arial', sans-serif;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 14px;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-top: 12px;
        font-size: 1.1rem;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-input:focus, .form-textarea:focus {
        border-color: #4A90E2;
        outline: none;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
    }

    .form-button {
        background-color: #000000;
        color: white;
        padding: 14px 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        font-size: 1.2rem;
        margin-top: 25px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .form-button:hover {
        background-color: #333;
    }

    .error-message, .success-message {
        font-size: 0.9rem;
        margin-top: 10px;
    }

    .error-message {
        color: red;
    }

    .success-message {
        color: green;
    }

    /* Flexbox container for image and contact form */
    .flex-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 12px;
        align-items: center;
    }

    @media (min-width: 768px) {
        .flex-container {
            flex-direction: row;
        }
        .form-container {
            max-width: 500px;
        }
    }

</style>

<section class="faq-section">
    <div class="faq-overlay"></div>
    <div class="container mx-auto faq-container">
        <h2 class="faq-title">Pertanyaan yang Sering Diajukan (FAQ)</h2>
        @foreach([
            ['faq1', 'Apa yang perlu saya lakukan untuk bergabung dengan gereja?', 'Anda dapat bergabung dengan gereja kami dengan mengikuti Ibadah kami setiap Minggu.'],
            ['faq2', 'Kapan jadwal Ibadah gereja?', 'Ibadah Raya atau Umum kami diadakan setiap hari Minggu pukul 07:45 WIB. Kami juga mengadakan Ibadah lainnya pada jadwal-jadwal tertentu.'],
            ['faq3', 'Apakah ada program untuk anak-anak?', 'Ya, kami memiliki program Sekolah Minggu untuk anak-anak selama ibadah. Mereka akan diajarkan nilai-nilai iman melalui aktivitas yang menyenangkan.'],
            ['faq4', 'Bagaimana saya bisa terlibat dalam kegiatan gereja?', 'Kami menyambut semua anggota untuk terlibat dalam kegiatan gereja. Silakan hubungi pengurus gereja untuk informasi lebih lanjut tentang pelayanan.'],
            ['faq5', 'Di mana gereja ini berada?', 'Gereja kami berlokasi di Jl. Raya Kutisari Indah No.60, Kutisari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur.'],
            ['faq6', 'Gimana saya bisa bertanya lebih lanjut?', 'Anda bisa menghubungi di kontak kami yaitu di nomor 087703370660 ya.']
        ] as $faq)
            <div class="faq-item">
                <div class="faq-header" onclick="toggleAnswer('{{ $faq[0] }}')">
                    <h3>{{ $faq[1] }}</h3>
                    <span id="{{ $faq[0] }}-toggle" class="faq-toggle">+</span>
                </div>
                <div id="{{ $faq[0] }}" class="faq-content">
                    <p>{{ $faq[2] }}</p>
                </div>
            </div>
        @endforeach
    </div>

            <!-- Form Section -->
            <div class="form-container">
                <h2 class="form-title">Ajukan Kritik dan Saran</h2>
                <form action="{{ route('kritikSaran.store')}}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <div class="mb-4" id="nameField">
                        <label for="name" class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Masukkan Nama Lengkap">
                        <p id="nameError" class="error-message hidden">Nama wajib diisi.</p>
                    </div>

                    <div class="mb-4">
                        <label for="kritikSaran" class="block text-gray-700">Kritik dan Saran</label>
                        <textarea id="kritikSaran" name="kritikSaran" class="form-textarea" rows="4" placeholder="Tulis Kritik dan Saran Anda di sini"></textarea>
                        <p id="kritikSaranError" class="error-message hidden">Kritik dan Saran wajib diisi.</p>
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="hideName" name="hideName" class="mr-2" onclick="toggleNameField()">
                        <label for="hideName" class="text-gray-700">Sembunyikan Nama</label>
                    </div>

                    <button type="submit" class="form-button">Kirim</button>
                </form>
            </div>
        </div>
    </section>
</section>

@include('components.marquee')

<script>
    function toggleAnswer(faqId) {
        // Menutup semua FAQ yang terbuka
        const allFaqContents = document.querySelectorAll('.faq-content');
        const allFaqToggles = document.querySelectorAll('.faq-toggle');
        allFaqContents.forEach(content => {
            if (content.id !== faqId) {
                content.classList.remove('open');
            }
        });
        allFaqToggles.forEach(toggle => {
            if (toggle.id !== `${faqId}-toggle`) {
                toggle.classList.remove('rotate');
            }
        });

        // Toggle untuk FAQ yang dipilih
        const faqContent = document.getElementById(faqId);
        const faqToggle = document.getElementById(`${faqId}-toggle`);
        faqContent.classList.toggle('open');
        faqToggle.classList.toggle('rotate');
    }

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

    function validateForm() {
        const nameField = document.getElementById('name');
        const kritikSaranField = document.getElementById('kritikSaran');
        const hideName = document.getElementById('hideName');

        const nameError = document.getElementById('nameError');
        const kritikSaranError = document.getElementById('kritikSaranError');

        let valid = true;

        if (!hideName.checked && nameField.value.trim() === '') {
            nameError.classList.remove('hidden');
            valid = false;
        } else {
            nameError.classList.add('hidden');
        }

        if (kritikSaranField.value.trim() === '') {
            kritikSaranError.classList.remove('hidden');
            valid = false;
        } else {
            kritikSaranError.classList.add('hidden');
        }

        return valid;
    }

    function toggleNameField() {
        const nameField = document.getElementById('nameField');
        const hideName = document.getElementById('hideName');

        if (hideName.checked) {
            nameField.style.display = 'none';
        } else {
            nameField.style.display = 'block';
        }
    }
</script>

@endsection
