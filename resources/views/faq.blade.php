@extends('layouts.app')



@section('content')

<section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Pertanyaan yang Sering Diajukan (FAQ)</h2>

        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq1')">
                    <h3 class="text-xl font-semibold">1. Apa yang perlu saya lakukan untuk bergabung dengan gereja?</h3>
                    <span id="faq1-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq1" class="hidden px-4 pb-4">
                    <p>Anda dapat bergabung dengan gereja dengan mengisi formulir pendaftaran anggota baru yang tersedia di meja informasi setelah ibadah.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq2')">
                    <h3 class="text-xl font-semibold">2. Kapan jadwal ibadah gereja?</h3>
                    <span id="faq2-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq2" class="hidden px-4 pb-4">
                    <p>Ibadah rutin diadakan setiap hari Minggu pukul 09:00 WIB. Kami juga mengadakan ibadah khusus pada hari-hari tertentu.</p>
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
                    <p>Kami menyambut semua anggota untuk terlibat dalam kegiatan gereja. Silakan hubungi pemimpin gereja untuk informasi lebih lanjut tentang peluang pelayanan.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg mb-4">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleAnswer('faq5')">
                    <h3 class="text-xl font-semibold">5. Di mana gereja ini berada?</h3>
                    <span id="faq5-toggle" class="text-blue-600">+</span>
                </div>
                <div id="faq5" class="hidden px-4 pb-4">
                    <p>Gereja kami berlokasi di [Alamat Gereja]. Anda dapat menggunakan peta di situs web kami untuk petunjuk lebih lanjut.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-form" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Kritik Dan Saran</h2>
        <p class="mb-4">Silakan isi formulir di bawah ini untuk mengajukan pertanyaan kepada kami.</p>

        <form action="/submit-question" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-left text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" placeholder="Masukkan nama lengkap">
            </div>
            <div class="mb-4">
                <label for="question" class="block text-left text-gray-700 font-semibold mb-2">Pertanyaan</label>
                <textarea id="question" name="question" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400" rows="4" placeholder="Tulis pertanyaan Anda di sini"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700 transition duration-300">Kirim Pertanyaan</button>
        </form>
    </div>
</section>

<script>
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
</script>

@endsection
