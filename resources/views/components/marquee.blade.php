
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    /* Container utama */
    .marquee-container {
        overflow: hidden;
        background: #000000; /* Background hitam sesuai referensi */
        height: 80px;
        display: flex;
        align-items: center;
        white-space: nowrap;
        position: relative;
    }

    /* Wrapper untuk konten marquee dan duplikat */
    .marquee-wrapper {
        display: flex;
        animation: marquee 12s linear infinite;
        white-space: nowrap;
    }

    /* Animasi marquee */
    @keyframes marquee {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    /* Gaya teks dalam marquee */
    .marquee-wrapper span {
        font-family: 'Bebas Neue', sans-serif; /* Font modern mendekati contoh */
        font-size: 60px;
        font-weight: 400;
        color: #ffffff; /* Warna teks putih */
        line-height: 80px;
        margin-right: 1rem; /* Spasi minimal antar teks */
    }
</style>


<div class="marquee-container">
    <div class="marquee-wrapper" id="marquee">
        <span>Selamat datang di GPPS Bethlehem Kutisari!</span>
        <span>Tuhan Yesus memberkati kita semua!</span>
        <span>CARE, LOVE, AND SERVE!</span>
    </div>
    <div class="marquee-wrapper">
        <span>Selamat datang di GPPS Bethlehem Kutisari!</span>
        <span>Tuhan Yesus memberkati kita semua!</span>
        <span>CARE, LOVE, AND SERVE!</span>
    </div>
</div>


