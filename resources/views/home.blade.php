@extends('layouts.app')

@section('content')

<body class="bg-gray-100">
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center text-white py-80" style="background-image: url('{{ asset('img/heroimg.JPG') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay -->
        <div class="relative z-10 text-center">
            <h1 class="text-6xl font-bold">Selamat Datang di Gereja Kami</h1>
            <p class="mt-4 text-2xl">Tempat untuk bertumbuh dalam iman dan kasih.</p>
            <a href="#tentang" class="mt-8 inline-block bg-white text-blue-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100">Pelajari Lebih Lanjut</a>
        </div>
    </section>
    {{-- About Section --}}
    <section id="tentang" class="py-10 bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center gap-2">
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{ asset('img/tentang.JPG') }}" alt="Tentang Gereja Kami" class="rounded-lg shadow-lg w-1/3 p-0">
        </div>
        <div class="w-full md:w-1/2 md:pl-10 -mt-4 md:mt-0 text-center md:text-left">
            <h2 class="text-4xl font-bold mb-4">Tentang Gereja Kami</h2>
            <p class="text-lg text-gray-700">Gereja kami adalah tempat untuk memperdalam iman, membangun hubungan dengan Tuhan, dan melayani masyarakat. Kami menyambut semua orang untuk bergabung dalam komunitas kami yang hangat dan penuh kasih.</p>
        </div>
    </div>
</section>
{{-- visi & misi Section --}}
<section id="visi-misi" class="py-20 bg-gradient-to-r from-blue-300 to-blue-500">
    <div class="container mx-auto text-center">
        <h2 class="text-5xl font-extrabold text-white mb-8">Visi dan Misi Kami</h2>
        <div class="flex flex-col md:flex-row justify-around">
            <!-- Visi -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 transform transition duration-500 hover:scale-105">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Visi</h3>
                <p class="text-lg text-gray-700">Menjadi gereja yang menginspirasi, mendukung, dan membimbing setiap individu dalam pertumbuhan iman dan kasih.</p>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 transform transition duration-500 hover:scale-105">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Misi</h3>
                <p class="text-lg text-gray-700">Menyebarkan kasih Kristus melalui pelayanan, komunitas, dan pengajaran yang mendorong pertumbuhan spiritual.</p>
            </div>
        </div>
    </div>
</section>
{{-- value Section --}}
<section id="nilai" class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-5xl font-extrabold text-blue-600 mb-8">Nilai Kami</h2>
        <div class="flex justify-center">
            <img src="{{ asset('img/your-image.png') }}" alt="nanti kasik gambar biar menarik tp blm nyari wkwk" class="w-1/4 rounded-lg shadow-lg">
        </div>
        <p class="text-4xl font-semibold text-blue-800 mb-4">Care, Love, and Serve</p>
        <p class="text-lg text-gray-700 mx-auto max-w-3xl mb-8">Kami berkomitmen untuk mengutamakan perhatian dan kepedulian dalam setiap interaksi. Menyebarkan kasih dalam setiap tindakan dan pelayanan. Melayani dengan sepenuh hati, mewujudkan iman dalam tindakan nyata.</p>
    </div>
</section>
{{-- jadwal Section --}}
<section id="sunday-services" class="py-20 bg-gradient-to-r from-blue-500 to-blue-300">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-8">Weekly Schedule</h2>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-10 mx-auto max-w-2xl">
            <h3 class="text-4xl font-semibold text-blue-600 mb-4">Ibadah Umum</h3>
            <p class="text-lg text-gray-600">Bergabunglah bersama kami dalam ibadah utama yang dipimpin dengan pujian dan khotbah yang menginspirasi.</p>
            <p class="mt-4 text-gray-700">Pukul 07:45 - 09:30</p>
        </div>

        <div class="flex flex-col md:flex-row justify-around">
            <!-- Umum -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Umum</h3>
                <p class="text-lg text-gray-600">Pukul 07:45 - 09:30</p>
                <p class="mt-4 text-gray-700">Bergabunglah dalam ibadah pagi yang penuh sukacita dengan pujian dan khotbah yang menginspirasi.</p>
            </div>

            <!-- Youth -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Youth</h3>
                <p class="text-lg text-gray-600">Pukul 10:30 - 12:00</p>
                <p class="mt-4 text-gray-700">Ibadah siang yang lebih santai, cocok untuk keluarga dan teman-teman.</p>
            </div>

            <!-- Sekolah Minggu -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Sekolah Minggu</h3>
                <p class="text-lg text-gray-600">Pukul 07:40 - 09:30</p>
                <p class="mt-4 text-gray-700">Akhiri hari Anda dengan ibadah malam yang damai dan reflektif.</p>
            </div>
        </div>

        <!-- Baris Kedua untuk Nilai Tambahan -->
        <div class="flex flex-col md:flex-row justify-around mt-10">
            <!-- Ibadah Malam -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Ibadah Malam</h3>
                <p class="text-lg text-gray-600">Pukul 18:00 - 19:30</p>
                <p class="mt-4 text-gray-700">Bergabunglah dalam ibadah malam yang penuh damai dan refleksi.</p>
            </div>

            <!-- Doa Bersama -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Doa Bersama</h3>
                <p class="text-lg text-gray-600">Pukul 16:00 - 17:00</p>
                <p class="mt-4 text-gray-700">Bersama-sama dalam doa, memperkuat iman kita.</p>
            </div>

            <!-- Pelayanan Komunitas -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-6 md:mb-0 md:w-1/3 mx-2">
                <h3 class="text-3xl font-semibold text-blue-600 mb-4">Pelayanan Komunitas</h3>
                <p class="text-lg text-gray-600">Pukul 15:00 - 16:00</p>
                <p class="mt-4 text-gray-700">Ikuti kegiatan pelayanan komunitas untuk saling mendukung.</p>
            </div>
        </div>
    </div>
</section>



    <section id="more-info" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Informasi Lebih Lanjut</h2>
            <p class="text-lg text-gray-600 mb-4">Ikuti kami di media sosial untuk mendapatkan berita terbaru dan informasi acara.</p>
            
            <div class="flex justify-center space-x-6 mb-8">
                <!-- Link Instagram -->
                <a href="https://www.instagram.com/gppsbethlehemkutisari?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-blue-600 hover:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4h2a2 2 0 012 2v2m-4 8v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2m-4 0v-2a2 2 0 012-2h2m4-4H8a2 2 0 00-2 2v2m8 0a6 6 0 11-6-6 6 6 0 016 6zm4-6h2a2 2 0 012 2v2m-4 0a6 6 0 01-6-6 6 6 0 016-6z" />
                    </svg>
                </a>
                
                <!-- Link Youtube -->
                <a href="https://www.youtube.com/@bethlehemkutisari4941" class="text-blue-600 hover:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 19.25C4.36 19.25 2 17.32 2 15.32 2 14.76 2.07 14.22 2.19 13.7c1.31-.36 2.49-1.01 3.52-1.94a10.44 10.44 0 01-1.18-.18c-1.56-.3-2.61-1.07-2.61-2.27 0-.01 0-.03 0-.04A7.23 7.23 0 007.57 12c.32-.05.62-.13.92-.23-.61-.13-1.13-.63-1.3-1.23-.17-.59-.04-1.25.39-1.7 1.06-1.05 3.31-.37 4.57.61-.04.01-.08.02-.12.03-.04 0-.08 0-.12-.01-.21-.04-.42-.07-.63-.07-.61 0-1.21.15-1.77.43 0 .03 0 .06 0 .09 0 1.25 1.08 2.38 2.43 2.38-.42 1.06-1.48 1.7-2.56 1.7-.3 0-.59-.02-.88-.08.85 2.61 3.29 4.51 6.14 4.54A11.47 11.47 0 012 19.25z" />
                    </svg>
                </a>
            </div>
    
            <p class="text-gray-600">Untuk informasi lebih lanjut, hubungi kami di: <a href="mailto:info@gereja.com" class="text-blue-600 underline">info@gereja.com</a></p>
        </div>
    </section>

    {{-- maps Section --}}
    <section id="maps" class="py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-blue-600 mb-8">Lokasi Kami</h2>
        <div class="flex justify-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.117285116905!2d112.74864667476119!3d-7.340723992667856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb282c280c5%3A0x20733d589d61a51a!2sGPPS%20Bethlehem%20Kutisari%20Surabaya!5e0!3m2!1sen!2sid!4v1727332708845!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>


    
    
    





@endsection


