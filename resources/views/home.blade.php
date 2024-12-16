@extends('layouts.app')

@section('content')

<style>
    @keyframes fade-in-up {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes fadeInDelay {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeInDelay {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes bounce-on-hover {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .animate-fade-in-delay {
        animation: fade-in 1.5s ease-out forwards;
        animation-delay: 0.5s;
    }

    .animate-bounce-on-hover:hover {
        animation: bounce-on-hover 1s infinite;
    }

    .animate-fade-in-up {
        animation: fade-in-up 2s ease-out forwards;
    }

    .fade-in-up-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        will-change: opacity, transform;
    }

    .fade-in-up-on-scroll.scroll-active {
        opacity: 1;
        transform: translateY(0);
    }

    .animate-slideUp {
        animation: slideUp 1s ease-out;
    }

    .animate-fadeInDelay {
        animation: fadeInDelay 1.5s ease-in-out;
    }

    #maps {
        background-color: #f4f4f4;
    }

    #maps .container {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .swiper-wrapper {
        width: 600px;
        height: 300px;
    }

    .highlight-red {
        color: red;
    }

     .animate-title {
        animation: slideDown 1s ease-in-out;
    }
    
    .fade-in {
        opacity: 0;
        animation: fadeInUp 1s forwards;
    }
    .delay-1 { animation-delay: 0.5s; }
    .delay-2 { animation-delay: 1s; }
    .delay-3 { animation-delay: 1.5s; }

    .bounce {
        display: inline-block;
        animation: bounce 1.5s infinite;
        color: #E53935; 
    }

    .underline-animation {
        position: relative;
        color: #E53935;
    }
    .underline-animation::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color: #E53935;
        animation: underlineExpand 1.5s forwards ease-out;
    }

    @keyframes slideDown {
        from { transform: translateY(-50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeInUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    @keyframes underlineExpand {
        to { width: 100%; }
    }

     .animate-title {
        animation: slideDown 1s ease-in-out;
    }
    
    .fade-in {
        opacity: 0;
        animation: fadeInUp 1s forwards;
    }
    .delay-1 { animation-delay: 0.5s; }
    .delay-2 { animation-delay: 1s; }
    .delay-3 { animation-delay: 1.5s; }

    .bounce {
        display: inline-block;
        animation: bounce 1.5s infinite;
        color: #E53935; 
    }

    .underline-animation {
        position: relative;
        color: #E53935;
    }
    .underline-animation::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 0;
        height: 3px;
        background-color: #E53935;
        animation: underlineExpand 1.5s forwards ease-out;
    }

    @keyframes slideDown {
        from { transform: translateY(-50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fadeInUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    @keyframes underlineExpand {
        to { width: 100%; }
    }

    .bg-opacity-70 {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .pull-up {
        display: inline-block;
        opacity: 0;
        transform: translateY(30%);
        animation: pullUp 1s ease-out forwards;
    }

    @keyframes pullUp {
        0% {
            opacity: 0;
            transform: translateY(40%);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .shiny-button {
        position: relative;
        overflow: hidden;
        text-align: center;
        border-radius: 9999px;
        background-color: #fcd34d;
        z-index: 1;
    }

    .shiny-button .shiny {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.5);
        transform: skewX(-30deg);
        transition: left 0.75s ease-in-out;
    }

    .shiny-button:hover .shiny {
        left: 125%;
    }

    .shiny-button:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2.5rem;
        }
        .shiny-button {
            font-size: 1rem;
            padding: 10px 20px;
        }
    }

    .bg-gray-50 {
        background-color: #FAFAFA;
    }

    h2::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background-color: #fbbf24;
        margin: 10px auto 0;
    }

    img {
        transition: transform 0.5s ease-in-out;
    }

    img:hover {
        transform: scale(1.1);
    }

    #motto-text {
        color: #02006d; 
        font-weight: bold;
        letter-spacing: 1px;
    }

    @media (max-width: 768px) {
        h2 {
            font-size: 2.5rem;
        }

        #motto-text {
            font-size: 2rem;
        }
    }

    body {
            margin: 0;
            background-color: #f9fafb;
            color: #333;
        }

    #sunday-services {
        position: relative;
        padding: 2rem 5rem; 
        text-align: center;
    }

    h2 {
        font-size: 2.5rem;
        color:rgb(0, 0, 0);
        font-weight: bold; 
        margin-bottom: 2rem;
    }

    .swiper-slide {
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .swiper-slide img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .swiper-slide img:hover {
        transform: scale(1.0);
    }

    .slide-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 1rem;
        color: #333;
    }

    .slide-time {
        color: #555;
        margin-top: 0.2rem;
    }

    .lightbox-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .lightbox-overlay.active {
        display: flex;
        opacity: 1;
    }

    .lightbox-overlay img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .swiper-button-prev,
    .swiper-button-next {
        position: static;
        top: 100%; 
        transform: translateY(0%); 
        z-index: 70;
        color:rgb(0, 0, 0);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease-in-out;
    }

    .swiper-button-prev {
        left: -20px;
    }

    .swiper-button-next {
        right: -20px;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        color:rgb(0, 0, 0);
    }

    .swiper-container {
        position: static;
        overflow: hidden;
        padding-bottom: 4rem; 
    }

    .swiper-pagination {
        margin-top: 1rem;
    }

    .swiper-pagination-bullet {
        background: #d1d5db;
        opacity: 0.8;
        width: 12px;
        height: 12px;
        margin: 0 71px;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background:rgb(0, 0, 0);
        transform: scale(1.0);
        opacity: 1;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<script>
    document.addEventListener('scroll', function() {
        let elements = document.querySelectorAll('.fade-in-up-on-scroll');
        elements.forEach((element) => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                element.classList.add('scroll-active');
            }
        });
    });
</script>

<body class="bg-gray-100">

    <section class="relative bg-black text-white min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('img/fotodepangerejacrop.JPG') }}');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-6">
            <!-- Main Heading -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight">
                Selamat Datang di <br> 
                <span class="block mt-2">GPPS Bethlehem Kutisari!</span>
            </h1>

            <!-- Button -->
            <div class="mt-8">
                <a href="#tentang" 
                class="shiny-button relative inline-block px-8 py-4 text-lg font-semibold text-black 
                        bg-yellow-500 rounded-full overflow-hidden transition-transform duration-300 transform 
                        hover:scale-105">
                    Tentang Kami
                    <div class="shiny absolute top-0 left-0 w-full h-full bg-white opacity-20 
                                transform -translate-x-full transition-transform duration-700"></div>
                </a>
            </div>
        </div>
    </section>


    <script>
        document.querySelector('a[href="#tentang"]').addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    </script>

    @include('components.marquee')

  <!-- Tentang Gereja Section -->
    <section id="tentang" class="py-16 bg-gray-100">
        <div class="container mx-auto px-8 md:px-16 lg:px-32 flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2 flex justify-center animate-on-scroll fade-in-left">
                <img src="{{ asset('img/fotodalam.JPG') }}" alt="Church Logo"
                    class="rounded-lg shadow-2xl transition-transform duration-300 hover:scale-105" />
            </div>

            <div class="w-full md:w-1/2 text-left animate-on-scroll fade-in-right">
                <h2 class="text-4xl font-bold mb-6 leading-tight">
                    Tentang Gereja Kami
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                    <span class="block mb-4 text-gray-900 font-semibold">Shallom!</span>
                    GPPS Bethlehem Kutisari hadir untuk bisa bersaksi akan kebaikan Tuhan kita Yesus Kristus. Kesempatan dan momentum yang Tuhan berikan dalam kehidupan kita untuk bersaksi bagi-Nya, hendaknya kita manfaatkan sebaik mungkin dengan penuh kerendahan hati, sukacita, dan pengabdian diri. <br><br>
                    Semoga dengan hadirnya GPPS Bethlehem Kutisari, kami dapat menjadi terang dan garam buat para saudara-saudari terkasih. Menjadi inspirasi orang percaya untuk terus bertumbuh dalam Tuhan! 
                </p>
                <div class="text-lg text-gray-900 font-bold">
                    Salam dalam kasih-Nya, <br>
                    <span class="text-yellow-500">Care, Love, and Serve!</span>
                </div>
            </div>
        </div>
    </section>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        });

        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(el => observer.observe(el));
    </script>

   <!-- Motto Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 flex flex-col items-center text-center">
            <h2 class="text-5xl font-bold text-gray-800 leading-tight relative mb-8">
                Motto Kami
                <div class="w-24 h-1 bg-yellow-500 mx-auto mt-4"></div>
            </h2>

            <div class="mb-8 transition-transform duration-500 hover:scale-110">
                <img src="{{ asset('img/logokutisari.png') }}" alt="Logo Motto" class="w-1/2 md:w-1/4 mx-auto">
            </div>

            <p id="motto-text" class="text-4xl font-semibold text-blue-700 mb-8"></p>

            <p class="text-lg text-gray-600 leading-relaxed max-w-3xl">
                GPPS Bethlehem Kutisari memiliki jemaat yang saling memperhatikan, mengasihi, dan melayani
                dalam rangka menjadi kesatuan jemaat yang kuat dan tidak tergoncangkan. Motto ini diharap
                menjadi dasar bagi para jemaat dalam menjalankan kehidupan kekristenannya hari lepas hari.
            </p>
        </div>
    </section>

    <script>
        const text = "ARE, LOVE, SERVE";
        let index = 0;
        let isDeleting = false;
        const speed = 300; // Kecepatan mengetik (ms)
        const eraseSpeed = 300; // Kecepatan menghapus (ms)
        const delayBetweenLoops = 1000; // Jeda sebelum mengetik ulang (ms)
        const pauseAtEnd = 1000; // Jeda setelah teks selesai (ms)

        function typeWriter() {
            const mottoText = document.getElementById("motto-text");
            if (!isDeleting && index <= text.length) {
                mottoText.innerHTML = "C" + text.substring(0, index++);
                setTimeout(typeWriter, speed);
            } else if (isDeleting && index >= 0) {
                mottoText.innerHTML = "C" + text.substring(0, index--);
                setTimeout(typeWriter, eraseSpeed);
            }

            if (index === text.length) {
                setTimeout(() => {
                    isDeleting = true;
                    typeWriter();
                }, pauseAtEnd);
            } else if (index < 0) {
                isDeleting = false;
                setTimeout(typeWriter, delayBetweenLoops);
            }
        }

        window.onload = typeWriter;
    </script>

    <!-- Visi & Misi Section -->
    <section class="py-10" style="background-color: #F4F4F4;">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 flex items-center justify-center">
            <div class="w-full lg:w-1/2">
                <h2 class="text-5xl font-bold mb-4 text-center" style="color: #1C2B2D;">
                    Visi & Misi
                </h2>
                <div class="flex flex-col md:flex-row justify-center gap-8">
                    <!-- Visi -->
                    <div class="p-4 shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl"
                        style="background-color: #FFFFFF; border-radius: 20px; width: 100%; max-width: 300px;">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold mb-2" style="color: #1C2B2D;">Visi</h3>
                            <p class="text-lg text-center" style="color: #4A5657;">
                                Menjadi jemaat yang kuat dan tidak tergoncangkan.
                            </p>
                        </div>
                    </div>

                    <!-- Misi -->
                    <div class="p-4 shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl"
                        style="background-color: #FFFFFF; border-radius: 20px; width: 100%; max-width: 300px;">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold mb-2" style="color: #1C2B2D;">Misi</h3>
                            <p class="text-lg text-center" style="color: #4A5657;">
                                Jemaat yang kuat dan saling menguatkan dalam aspek spiritual, psiko-sosial,
                                dalam kehidupan pribadi maupun komunal (keluarga dan gereja).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Empat Pilar Section -->
    <section class="py-10" style="background-color: #F4F4F4;">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 flex items-center justify-center">
            <div class="flex flex-col text-center">
                <h2 class="text-5xl font-bold mb-8 animate-title" style="color: #1C2B2D;">
                    Empat Pilar
                </h2>
                <div class="text-4xl font-semibold space-y-4">
                    <p class="fade-in">
                        Bertumbuh <strong class="highlight-red bounce">Dewasa</strong> melalui 
                        <strong class="highlight-red underline-animation">Pembinanan</strong>
                    </p>
                    <p class="fade-in delay-1">
                        Bertumbuh <strong class="highlight-red bounce">Besar</strong> melalui 
                        <strong class="highlight-red underline-animation">Pelayanan</strong>
                    </p>
                    <p class="fade-in delay-2">
                        Bertumbuh <strong class="highlight-red bounce">Kuat</strong> melalui 
                        <strong class="highlight-red underline-animation">Ibadah</strong>
                    </p>
                    <p class="fade-in delay-3">
                        Bertambah <strong class="highlight-red bounce">Akrab</strong> melalui 
                        <strong class="highlight-red underline-animation">Persekutuan</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ibadah Sepekan Section -->
    <section id="sunday-services">
        <h2>Ibadah Sepekan</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Kartu 1 -->
                <div class="swiper-slide">
                    <img src="img/umum.JPG" alt="Ibadah Umum" class="lightbox-trigger">
                    <div class="slide-title">Ibadah Umum</div>
                    <div class="slide-time">Minggu | Pukul 07:45 - 09:30</div>
                </div>
                <!-- Kartu 2 -->
                <div class="swiper-slide">
                    <img src="img/KW.JPG" alt="Ibadah Kaum Wanita" class="lightbox-trigger">
                    <div class="slide-title">Ibadah Kaum Wanita</div>
                    <div class="slide-time">Selasa | Pukul 16:30 - 18:00</div>
                </div>
                <!-- Kartu 3 -->
                <div class="swiper-slide">
                    <img src="img/commcell2.JPG" alt="Youth Commcell" class="lightbox-trigger">
                    <div class="slide-title">Youth Commcell</div>
                    <div class="slide-time">Rabu | Pukul 19:00 - 21:00</div>
                </div>
                <!-- Kartu 4 -->
                <div class="swiper-slide">
                    <img src="img/dm2.JPG" alt="Doa Malam" class="lightbox-trigger">
                    <div class="slide-title">Doa Malam</div>
                    <div class="slide-time">Kamis | Pukul 18:30 - 20:00</div>
                </div>
                <!-- Kartu 5 -->
                <div class="swiper-slide">
                    <img src="img/fajar.JPG" alt="Doa Fajar" class="lightbox-trigger">
                    <div class="slide-title">Doa Fajar</div>
                    <div class="slide-time">Sabtu | Pukul 05:30 - 06:30</div>
                </div>
            </div>
            <!-- Navigasi Panah -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- Pagination Bulat -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Lightbox Overlay -->
    <div id="lightbox" class="lightbox-overlay">
        <img id="lightbox-image" src="" alt="Enlarged Image">
    </div>

    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Swiper Initialization
        new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });

        // Lightbox Functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const triggers = document.querySelectorAll('.lightbox-trigger');

        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                lightboxImage.src = trigger.src;
                lightbox.classList.add('active');
            });
        });

        lightbox.addEventListener('click', () => {
            lightbox.classList.remove('active');
            lightboxImage.src = '';
        });
    </script>

    <!-- Maps Section -->
    <section id="maps" class="py-20 bg-gray-100">
        <div class="container mx-auto max-w-5xl text-center p-6 rounded-lg shadow-lg bg-white">
            <h2 class="text-4xl font-bold text-black mb-6 fade-in-up-on-scroll">Lokasi Kami</h2>
            <div class="flex justify-center mb-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.117285116905!2d112.74864667476119!3d-7.340723992667856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb282c280c5%3A0x20733d589d61a51a!2sGPPS%20Bethlehem%20Kutisari%20Surabaya!5e0!3m2!1sen!2sid!4v1727332708845!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>


    @endsection