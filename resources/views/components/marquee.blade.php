
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    /* Container Utama */
    .marquee-container {
        overflow: hidden;
        background: #1a1a1a; /* Background abu-abu gelap */
        height: 80px;
        display: flex;
        align-items: center;
        white-space: nowrap;
        position: relative;
    }

    /* Wrapper untuk Konten */
    .marquee-wrapper {
        display: flex;
        animation: marquee 15s linear infinite;
        white-space: nowrap;
    }

    /* Animasi Marquee */
    @keyframes marquee {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-100%);
        }
    }

    /* Gaya Teks */
    .marquee-wrapper span {
        font-family: 'Bebas Neue', sans-serif; /* Font modern */
        font-size: 50px;
        font-weight: 400;
        color: #cccccc; /* Warna teks abu terang */
        line-height: 80px;
        margin-right: 2rem; /* Spasi antar teks */
        display: flex;
        align-items: center;
    }

    /* Gaya Pemisah Simbol */
    .separator {
        font-size: 40px;
        color: #666666; /* Warna simbol abu-abu lebih gelap */
        margin: 0 1rem;
    }
</style>

<!-- Marquee Section -->
<div class="marquee-container">
    <div class="marquee-wrapper" id="marquee">
        <span>SELAMAT DATANG DI GPPS BETHLEHEM KUTISARI!</span>
        <span>TUHAN YESUS MEMBERKATI KITA SEMUA!</span>
        <span>CARE • LOVE • SERVE</span>
    </div>
    <div class="marquee-wrapper">
        <span>SELAMAT DATANG DI GPPS BETHLEHEM KUTISARI!</span>
        <span>TUHAN YESUS MEMBERKATI KITA SEMUA!</span>
        <span>CARE • LOVE • SERVE</span>
    </div>
</div>

