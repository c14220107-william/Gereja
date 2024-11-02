@extends('layouts.app')

@section('content')

<!-- Keyframes and Custom Animations (Tailwind Config) -->
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

    /* Utility for animation timing delay */
    .animate-fade-in-delay {
        animation: fade-in 1.5s ease-out forwards;
        animation-delay: 0.5s;
    }

    /* Bounce effect on hover */
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

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- JavaScript untuk animasi saat scroll -->
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

   <!-- Hero Section -->
    <section class="relative bg-black text-white min-h-screen flex items-center justify-center">
        <!-- Gambar Background dengan Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" 
            style="background-image: url('{{ asset('img/fotodepangerejacrop.JPG') }}');">
            <div class="absolute inset-0 bg-black bg-opacity-70"></div> <!-- Overlay Lebih Gelap -->
        </div>

        <!-- Konten Hero -->
        <div class="relative z-10 text-center max-w-2xl mx-auto">
            <p class="text-lg mb-4 uppercase tracking-widest opacity-0 animate-fade-in">Made in Framer</p>
            
            <!-- Animasi Reveal untuk Teks -->
            <h1 class="text-7xl font-extrabold leading-tight mb-6 animate-reveal-text">
                Selamat Datang di GPPS Bethlehem Kutisari!
            </h1>

            <a href="#tentang" class="bg-yellow-500 text-white px-8 py-4 rounded-full shadow-md text-lg font-semibold 
            transition-transform transform hover:scale-105 hover:bg-yellow-600">
                Tentang Kami
            </a>
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
            <!-- Gambar -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('img/fotodalam.JPG') }}" alt="Church Logo" class="rounded-lg shadow-lg" />
            </div>

            <!-- Konten Teks -->
            <div class="w-full md:w-1/2 text-left">
                <h2 class="text-4xl font-bold mb-6 text-gray-900">
                    Tentang Gereja Kami
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                    Shallom! GPPS Bethlehem Kutisari hadir untuk bisa bersaksi akan kebaikan Tuhan kita Yesus Kristus. Kesempatan dan momentum yang Tuhan berikan dalam kehidupan kita untuk bersaksi bagi-Nya, hendaknya kita manfaatkan sebaik mungkin dengan penuh kerendahan hati, sukacita, dan pengabdian diri. Semoga dengan hadirnya GPPS Bethlehem Kutisari, kami dapat menjadi terang dan garam buat para saudara-saudari terkasih. Menjadi inspirasi orang percaya untuk terus bertumbuh dalam Tuhan! Salam dalam kasih-Nya, Care Love and Serve!
                </p>
            </div>
        </div>
    </section>

    <!-- Motto Section -->
    <section class="py-10" style="background-color: #F4F4F4;">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 flex items-center justify-center">
            <div class="flex flex-col text-center">
                <h2 class="text-5xl font-bold mb-4" style="color: #1C2B2D;">
                    Motto Kami
                </h2>
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('img/logokutisari.png') }}" alt="Logo Motto" 
                        class="w-1/2 md:w-1/3 rounded-full">
                </div>
                <p class="text-4xl font-semibold mb-2" style="color: #4A5657;">
                    <span id="motto-text"></span>
                </p>
                <p class="text-lg text-center" 
                style="">
                    GPPS Bethlehem Kutisari memiliki jemaat yang saling memperhatikan, mengasihi, dan melayani 
                    dalam rangka menjadi kesatuan jemaat yang kuat dan tidak tergoncangkan. Motto ini diharap 
                    menjadi dasar bagi para jemaat dalam menjalankan kehidupan kekristenannya hari lepas hari.
                </p>
            </div>
        </div>
    </section>


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


    <!-- JavaScript untuk Looping Typing Effect -->
    <script>
        const text = "Care Love Serve";
        let index = 0;
        let isDeleting = false;
        const speed = 200; // Kecepatan mengetik (ms)
        const eraseSpeed = 150; // Kecepatan menghapus (ms)
        const delayBetweenLoops = 9000; // Jeda sebelum mengetik ulang (ms)
        const pauseAtEnd = 3000; // Jeda setelah teks selesai (ms)

        function typeWriter() {
            const mottoText = document.getElementById("motto-text");

            if (!isDeleting && index <= text.length) {
                mottoText.innerHTML = text.substring(0, index++);
                setTimeout(typeWriter, speed);
            } else if (isDeleting && index >= 0) {
                mottoText.innerHTML = text.substring(0, index--);
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
    
    <!-- Seksi Ibadah Sepekan -->
    <section id="sunday-services" class="py-10" style="background-color: #F4F4F4;">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8" style="color: #1C2B2D;">Ibadah Sepekan</h2>

            <div class="relative swiper">
                <!-- swiper Container -->
                <div class="flex items-center swiper-wrapper">           
                     
                    <!-- Kartu 1 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Ibadah Umum</h3>
                        <p class="text-gray-700">Minggu | Pukul 07:45 - 09:30</p>
                        <p class="text-sm text-gray-500">Bergabunglah dalam ibadah utama dengan pujian dan khotbah yang menginspirasi.</p>
                    </div>
                     
                     
                    <!-- Kartu 2 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Ibadah Kaum Wanita</h3>
                        <p class="text-gray-700">Selasa | Pukul 16:30 - 18:00</p>
                        <p class="text-sm text-gray-500">Ibadah khusus wanita dengan suasana sukacita dan pujian menyentuh hati.</p>
                    </div>

                    <!-- Kartu 3 -->                 
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Youth Commcell</h3>
                        <p class="text-gray-700">Rabu | Pukul 19:00 - 21:00</p>
                        <p class="text-sm text-gray-500">Komunitas muda dalam ibadah malam yang menyenangkan dan penuh semangat.</p>
                    </div>
                     
                     
                    <!-- Kartu 4 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Doa Malam</h3>
                        <p class="text-gray-700">Kamis | Pukul 18:30 - 20:00</p>
                        <p class="text-sm text-gray-500">Akhiri hari dengan doa malam yang penuh damai dan refleksi rohani.</p>
                    </div>
                     
                      
                    <!-- Kartu 5 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Doa Fajar</h3>
                        <p class="text-gray-700">Sabtu | Pukul 05:30 - 06:30</p>
                        <p class="text-sm text-gray-500">Mulailah pagi Anda dengan doa bersama untuk mendapatkan kekuatan dan berkat.</p>
                    </div>
                     
                     
                    <!-- Kartu 6 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Sekolah Minggu</h3>
                        <p class="text-gray-700">Minggu | Pukul 08:00 - 09:30</p>
                        <p class="text-sm text-gray-500">Ibadah anak-anak yang menyenangkan untuk menumbuhkan iman sejak dini.</p>
                    </div>
                     
                     
                    <!-- Kartu 7 -->
                    <div class="swiper-slide min-w-[200px] p-6 min-h-[200px] bg-white rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-2">Ibadah Youth</h3>
                        <p class="text-gray-700">Minggu | Pukul 10:30 - 12:00</p>
                        <p class="text-sm text-gray-500">Bergabunglah dalam ibadah youth untuk bertumbuh dalam iman dan komunitas.</p>
                    </div>      
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper Javascript -->
    <script>
        new Swiper('.swiper', {
        loop: true,

        // pagination bullets
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        autoplay: {
        delay: 4000,
        }
        
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