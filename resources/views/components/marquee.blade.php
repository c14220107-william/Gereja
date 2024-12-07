<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scrolling Text</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    /* Container Utama */
    .marquee-container {
      overflow: hidden;
      background: #1a1a1a; /* Background abu-abu gelap */
      height: 80px;
      display: flex;
      align-items: center;
      position: relative;
    }

    /* Wrapper untuk Konten */
    .marquee-wrapper {
      display: flex;
      white-space: nowrap;
      animation: marquee 15s linear infinite; /* Animasi berjalan terus */
    }

    /* Animasi Marquee */
    @keyframes marquee {
      0% {
        transform: translateX(0); /* Mulai dari posisi awal (full di kiri) */
      }

      100% {
        transform: translateX(-100%); /* Pergi ke sisi kiri, dan text akan menghilang di kiri */
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
  </style>
</head>

<body>
  <!-- Marquee Section -->
  <div class="marquee-container">
    <!-- Kontainer yang berisi teks berjalan -->
    <div class="marquee-wrapper">
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
</body>

</html>
