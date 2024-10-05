@extends('layouts.app')

@section('content')

<body class="bg-gray-100">

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center text-white py-80" style="background-image: url('{{ asset('img/fotodalam.JPG') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Overlay -->
        <div class="relative z-10 text-center">
            <h1 class="text-6xl font-bold">Selamat Datang di Gereja Kami</h1>
            <p class="mt-4 text-2xl">Mari saling memperhatikan, mengasihi, dan melayani satu dengan yang lain.</p>
            <a href="#tentang" class="mt-8 inline-block bg-white text-yellow-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100">Tentang Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-16 bg-black">
        <div class="container mx-auto flex flex-col items-center justify-center gap-8">
            <div class="flex justify-center mb-1">
                <img src="{{ asset('img/logopusat.png') }}" alt="Church Icon">
            </div>
            <div class="w-full md:w-2/3 text-center">
                <h2 class="text-5xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-yellow-500 to-blue-500">
                    Tentang Gereja Kami
                </h2>
                <p class="text-lg text-gray-300 hover:text-gray-100 transition-all shadow-lg shadow-yellow-400/50">
                    ini nanti harus coba tnya yang agak panjang penjelasane, mungkin isa juga ditambah sejarah" tipis" gitu. tapi ya itu harus tanya dlu. ini sementara coba kalo panjang bagus atau ga. apakah ini sudah cukup panjang. jadi ini nanti bagian untuk menjelaskan dari gereja ini bagaiamana dan lain-lain. asdfasdkfjaskdlfjnejngfaisdhgknsdktbiprefkdnbnaoirhtkamkdnvsaklnvlnakdlg alkdjfakheingklsadnklvnansdg.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="relative bg-cover bg-center text-white py-96" style="background-image: url('{{ asset('img/fotodepangerejacrop.JPG') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative z-10 text-center flex items-center justify-center h-full">
            <div class="container mx-auto text-center px-8">
                <h2 class="text-7xl font-serif font-extrabold text-white mb-12">
                    Visi dan Misi
                </h2>
                <div class="flex flex-col md:flex-row justify-around gap-10">
                    <!-- Visi -->
                    <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl p-12 md:w-1/3 flex items-center justify-center transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:bg-opacity-90">
                        <div class="text-center">
                            <h3 class="text-5xl font-bold text-yellow-400 mb-6">Visi</h3>
                            <p class="text-2xl text-gray-200">
                                Menjadi jemaat yang kuat dan tidak tergoncangkan.
                            </p>
                        </div>
                    </div>
                    <!-- Misi -->
                    <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl p-12 md:w-1/3 flex items-center justify-center transform transition duration-500 hover:scale-105 hover:shadow-2xl hover:bg-opacity-90">
                        <div class="text-center">
                            <h3 class="text-5xl font-bold text-yellow-400 mb-6">Misi</h3>
                            <p class="text-2xl text-gray-200">
                                Jemaat yang kuat dan saling menguatkan dalam aspek spiritual, psiko-sosial, dalam kehidupan pribadi maupun komunal (keluarga dan gereja).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Motto Section -->
    <section id="nilai" class="py-20 bg-black">
        <div class="container mx-auto text-center">
        <h2 class="text-5xl font-extrabold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-yellow-500 to-blue-500">
                    Motto kami
                </h2>
            <div class="flex justify-center">
                <img src="{{ asset('img/logokutisari.png') }}" alt="nanti kasik gambar biar menarik tp blm nyari wkwk" class="w-1/6 rounded-lg shadow-lg">
            </div>
            <p class="text-4xl font-semibold text-yellow-600 mb-4">Care, Love, and Serve</p>
            <p class="text-lg text-white mx-auto max-w-3xl mb-8">ini nanti kasik penjelasan juga tentang care, love, and serve ini, tapi masik gatau, nnti tnya lagi. yang ini gausa terlalu panjang tapi jangan terlalu pendek juga.</p>
        </div>
    </section>

    <!-- Jadwal Section -->
    <section id="sunday-services" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold text-black mb-8">Ibadah Sepekan</h2>

            <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-8 mb-10 mx-auto max-w-2xl transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-4xl font-semibold text-white mb-4 border-b-4 border-yellow-300 inline-block pb-2">Ibadah Umum</h3>
                <p class="mt-4 text-yellow-300 font-bold text-2xl">Minggu</p>
                <p class="mt-0 text-yellow-300 text-xl font-medium">Pukul 07:45 - 09:30</p>
                <p class="mt-4 text-lg text-white leading-relaxed">Bergabunglah bersama kami dalam ibadah utama yang dipimpin dengan pujian dan khotbah yang menginspirasi.</p>
            </div>

            <div class="flex flex-col md:flex-row justify-around">
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Ibadah Kaum Wanita</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Selasa</p>
                    <p class="text-lg text-yellow-300">Pukul 16:30 - 18:00</p>
                    <p class="mt-3 text-white leading-relaxed">Bergabunglah dalam ibadah pagi yang penuh sukacita dengan pujian dan khotbah yang menginspirasi.</p>
                </div>
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Youth Commcell</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Rabu</p>
                    <p class="text-lg text-yellow-300">Pukul 19:00 - 21:00</p>
                    <p class="mt-3 text-white leading-relaxed">Ibadah siang yang lebih santai, cocok untuk keluarga dan teman-teman.</p>
                </div>
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Doa Malam</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Kamis</p>
                    <p class="text-lg text-yellow-300">Pukul 18:30 - 20:00</p>
                    <p class="mt-3 text-white leading-relaxed">Akhiri hari Anda dengan ibadah malam yang damai dan reflektif.</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-around mt-10">
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Doa Fajar</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Sabtu</p>
                    <p class="text-lg text-yellow-300">Pukul 05:30 - 06:30</p>
                    <p class="mt-3 text-white leading-relaxed">Bergabunglah dalam ibadah malam yang penuh damai dan refleksi.</p>
                </div>
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Sekolah Minggu</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Minggu</p>
                    <p class="text-lg text-yellow-300">Pukul 08:00 - 09:30</p>
                    <p class="mt-3 text-white leading-relaxed">Bersama-sama dalam doa, memperkuat iman kita.</p>
                </div>
                <div class="bg-gradient-to-r from-gray-600 to-gray-900 rounded-xl shadow-lg p-6 mb-6 md:mb-0 md:w-1/3 mx-7 transform hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2 border-b-2 border-yellow-300 inline-block pb-1">Ibadah Youth</h3>
                    <p class="mt-3 text-yellow-300 font-bold text-xl">Minggu</p>
                    <p class="text-lg text-yellow-300">Pukul 10:30 - 12:00</p>
                    <p class="mt-3 text-white leading-relaxed">Ikuti kegiatan pelayanan komunitas untuk saling mendukung.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Informasi Section -->
    <section id="more-info" class="py-20 bg-gray-300">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">Informasi Lebih Lanjut</h2>
            <p class="text-lg text-gray-600 mb-4">Ikuti kami di media sosial untuk mendapatkan berita terbaru dan informasi acara.</p>

            <div class="flex justify-center space-x-6 mb-8">
                <!-- Link Instagram -->
                <a href="https://www.instagram.com/gppsbethlehemkutisari?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-blue-600 hover:text-blue-800">
                    <button class="w-10 h-10 flex items-center justify-center group rounded-lg bg-white shadow-md shadow-gray-200 group transition-all duration-300">
                        <svg class="transition-all duration-300 group-hover:scale-110" width="28" height="28" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z" fill="url(#paint0_radial_7092_54471)" />
                            <path d="M27.4456 35.7808C27.4456 31.1786 31.1776 27.4468 35.7826 27.4468C40.3875 27.4468 44.1216 31.1786 44.1216 35.7808C44.1216 40.383 40.3875 44.1148 35.7826 44.1148C31.1776 44.1148 27.4456 40.383 27.4456 35.7808ZM22.9377 35.7808C22.9377 42.8708 28.6883 48.618 35.7826 48.618C42.8768 48.618 48.6275 42.8708 48.6275 35.7808C48.6275 28.6908 42.8768 22.9436 35.7826 22.9436C28.6883 22.9436 22.9377 28.6908 22.9377 35.7808ZM46.1342 22.4346C46.1339 23.0279 46.3098 23.608 46.6394 24.1015C46.9691 24.595 47.4377 24.9797 47.9861 25.2069C48.5346 25.4342 49.1381 25.4939 49.7204 25.3784C50.3028 25.2628 50.8378 24.9773 51.2577 24.5579C51.6777 24.1385 51.9638 23.6041 52.0799 23.0222C52.1959 22.4403 52.1367 21.8371 51.9097 21.2888C51.6828 20.7406 51.2982 20.2719 50.8047 19.942C50.3112 19.6122 49.7309 19.436 49.1372 19.4358H49.136C48.3402 19.4361 47.5771 19.7522 47.0142 20.3144C46.4514 20.8767 46.1349 21.6392 46.1342 22.4346ZM25.6765 56.1302C23.2377 56.0192 21.9121 55.6132 21.0311 55.2702C19.8632 54.8158 19.0299 54.2746 18.1538 53.4002C17.2777 52.5258 16.7354 51.6938 16.2827 50.5266C15.9393 49.6466 15.533 48.3214 15.4222 45.884C15.3009 43.2488 15.2767 42.4572 15.2767 35.781C15.2767 29.1048 15.3029 28.3154 15.4222 25.678C15.5332 23.2406 15.9425 21.918 16.2827 21.0354C16.7374 19.8682 17.2789 19.0354 18.1538 18.1598C19.0287 17.2842 19.8612 16.7422 21.0311 16.2898C21.9117 15.9466 23.2377 15.5406 25.6765 15.4298C28.3133 15.3086 29.1054 15.2844 35.7826 15.2844C42.4598 15.2844 43.2527 15.3106 45.8916 15.4298C48.3305 15.5408 49.6539 15.9498 50.537 16.2898C51.7049 16.7422 52.5382 17.2854 53.4144 18.1598C54.2905 19.0342 54.8308 19.8682 55.2855 21.0354C55.6289 21.9154 56.0351 23.2406 56.146 25.678C56.2673 28.3154 56.2915 29.1048 56.2915 35.781C56.2915 42.4572 56.2673 43.2466 56.146 45.884C56.0349 48.3214 55.6267 49.6462 55.2855 50.5266C54.8308 51.6938 54.2893 52.5266 53.4144 53.4002C52.5394 54.2738 51.7049 54.8158 50.537 55.2702C49.6565 55.6134 48.3305 56.0194 45.8916 56.1302C43.2549 56.2514 42.4628 56.2756 35.7826 56.2756C29.1024 56.2756 28.3125 56.2514 25.6765 56.1302ZM25.4694 10.9322C22.8064 11.0534 20.9867 11.4754 19.3976 12.0934C17.7518 12.7316 16.3585 13.5878 14.9663 14.977C13.5741 16.3662 12.7195 17.7608 12.081 19.4056C11.4626 20.9948 11.0403 22.8124 10.9191 25.4738C10.7958 28.1394 10.7676 28.9916 10.7676 35.7808C10.7676 42.57 10.7958 43.4222 10.9191 46.0878C11.0403 48.7494 11.4626 50.5668 12.081 52.156C12.7195 53.7998 13.5743 55.196 14.9663 56.5846C16.3583 57.9732 17.7518 58.8282 19.3976 59.4682C20.9897 60.0862 22.8064 60.5082 25.4694 60.6294C28.138 60.7506 28.9893 60.7808 35.7826 60.7808C42.5759 60.7808 43.4286 60.7526 46.0958 60.6294C48.759 60.5082 50.5774 60.0862 52.1676 59.4682C53.8124 58.8282 55.2066 57.9738 56.5989 56.5846C57.9911 55.1954 58.8438 53.7998 59.4842 52.156C60.1026 50.5668 60.5268 48.7492 60.6461 46.0878C60.7674 43.4202 60.7956 42.57 60.7956 35.7808C60.7956 28.9916 60.7674 28.1394 60.6461 25.4738C60.5248 22.8122 60.1026 20.9938 59.4842 19.4056C58.8438 17.7618 57.9889 16.3684 56.5989 14.977C55.2088 13.5856 53.8124 12.7316 52.1696 12.0934C50.5775 11.4754 48.7588 11.0514 46.0978 10.9322C43.4306 10.811 42.5779 10.7808 35.7846 10.7808C28.9913 10.7808 28.138 10.809 25.4694 10.9322Z" fill="url(#paint1_radial_7092_54471)" />
                            <defs>
                                <radialGradient id="paint0_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(17.4144 61.017) scale(65.31 65.2708)">
                                    <stop offset="0.09" stop-color="#FA8F21" />
                                    <stop offset="0.78" stop-color="#D82D7E" />
                                </radialGradient>
                                <radialGradient id="paint1_radial_7092_54471" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(41.1086 63.257) scale(51.4733 51.4424)">
                                    <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                    <stop offset="1" stop-color="#8C3AAA" />
                                </radialGradient>
                            </defs>
                        </svg>
                    </button>
                </a>

                <!-- Link Youtube -->
                <a href="https://www.youtube.com/@bethlehemkutisari4941" class="text-blue-600 hover:text-blue-800">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-white shadow-md shadow-gray-200 group transition-all duration-300">
                        <svg class="rounded-md transition-all duration-300 group-hover:scale-110" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72" fill="none">
                            <path d="M61.1026 23.7185C60.5048 21.471 58.7363 19.6981 56.4863 19.0904C52.4181 18 36.0951 18 36.0951 18C36.0951 18 19.7805 18 15.7039 19.0904C13.4622 19.6897 11.6937 21.4627 11.0876 23.7185C10 27.7971 10 36.3124 10 36.3124C10 36.3124 10 44.8276 11.0876 48.9063C11.6854 51.1537 13.4539 52.9267 15.7039 53.5343C19.7805 54.6247 36.0951 54.6247 36.0951 54.6247C36.0951 54.6247 52.4181 54.6247 56.4863 53.5343C58.728 52.935 60.4965 51.162 61.1026 48.9063C62.1902 44.8276 62.1902 36.3124 62.1902 36.3124C62.1902 36.3124 62.1902 27.7971 61.1026 23.7185Z" fill="#FF3000" />
                            <path d="M30.8811 44.1617L44.4392 36.3124L30.8811 28.463V44.1617Z" fill="white" />
                        </svg>
                    </button>
                </a>
            </div>

            <p class="text-gray-600">Untuk informasi lebih lanjut, hubungi kami di: <a href="mailto:info@gereja.com" class="text-blue-600 underline">info@gereja.com</a></p>
        </div>
    </section>

    <!-- Maps Section -->
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