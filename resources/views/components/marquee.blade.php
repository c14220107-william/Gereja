<style>
    .marquee-container {
        overflow: hidden; 
        white-space: nowrap;
    }

    .marquee {
        display: inline-block;
        animation: marquee 10s linear infinite; 
    }

    @keyframes marquee {
        0% {
            transform: translateX(0); 
        }
        100% {
            transform: translateX(-50%); 
        }
    }
</style>

<div class="relative bg-gradient-to-b from-neutral-700 to-black h-20 text-white py-4">
    <div class="marquee-container">
        <div id="marquee" class="marquee">
            <span class="mx-8 text-3xl font-bold">Selamat datang di GPPS Bethlehem Kutisari!</span>
            <span class="mx-8 text-3xl font-bold">Tuhan Yesus memberkati kita semua!</span>
            <span class="mx-8 text-3xl font-bold">CARE, LOVE, AND SERVE!</span>
            <span class="mx-8 text-3xl font-bold">Selamat datang di GPPS Bethlehem Kutisari!</span>
            <span class="mx-8 text-3xl font-bold">Tuhan Yesus memberkati kita semua!</span>
            <span class="mx-8 text-3xl font-bold">CARE, LOVE, AND SERVE!</span>
        </div>
    </div>
</div>

<script>
    const marquee = document.getElementById('marquee');
    
    // total panjang text
    const marqueeWidth = marquee.scrollWidth;
    const containerWidth = document.querySelector('.marquee-container').clientWidth;

    // kecepatan running text
    const duration = (marqueeWidth / 80) + 's'; 
    marquee.style.animationDuration = duration;

    // Reset animasi
    marquee.addEventListener('animationiteration', () => {
        marquee.style.animation = 'none'; 
        void marquee.offsetWidth; 
        marquee.style.animation = `marquee ${duration} linear infinite`; 
    });
</script>
