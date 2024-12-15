@extends('layouts.app')

@section('content')

<style>
    .modal {
        z-index: 1000;
    }

    /* Tambahkan margin nol pada elemen body/container utama */
    body,
    .container {
        margin: 0;
        padding: 0;
    }
</style>

<div class="container mx-auto p-0">
    <h1 class="text-3xl font-bold mb-6">Service Registration</h1>

    <!-- Hero Section -->
    <section class="relative bg-black text-white min-h-screen flex items-center justify-center">
        <!-- Gambar Background dengan Overlay -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('img/fotodepangerejacrop.JPG') }}');">
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        </div>

        <!-- Konten Hero -->
        <div class="relative z-10 text-center max-w-4xl mx-auto">
            <!-- Animasi Reveal untuk Teks -->
            <!-- Child Dedication Section (Hero Style) -->
            <section class="relative mb-8 bg-gradient-to-r from-gray-100 to-gray-300 p-8 rounded-lg shadow-lg text-black mt-8 h-auto" data-aos="fade-right">
                <h2 class="text-4xl font-bold mb-4">PERMOHONAN PENYERAHAN ANAK</h2>
                <p class="text-lg">Ajukan permohonan penyerahan anak Anda secara mudah melalui form online.</p>
                <button id="openChildDedicationModal" class="mt-4 bg-gray-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-900 hover:text-gray-200 transition duration-300">Open Form</button>
            </section>

            <!-- Marriage Blessing Section (Hero Style) -->
            <section class="relative mb-8 bg-gradient-to-r from-gray-100 to-gray-300 p-8 rounded-lg shadow-lg text-black h-auto" data-aos="fade-left">
                <h2 class="text-4xl font-bold mb-4">PERMOHONAN PEMBERKATAN PERNIKAHAN</h2>
                <p class="text-lg">Daftarkan pemberkatan pernikahan Anda.</p>
                <button id="openMarriageBlessingModal" class="mt-4 bg-gray-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-900 hover:text-gray-200 transition duration-300">Open Form</button>
            </section>

            <!-- Baptism Request Section (Hero Style) -->
            <section class="relative mb-8 bg-gradient-to-r from-gray-100 to-gray-300 p-8 rounded-lg shadow-lg text-black h-auto" data-aos="fade-right">
                <h2 class="text-4xl font-bold mb-4">PERMOHONAN BAPTISAN AIR</h2>
                <p class="text-lg">Daftar untuk mengikuti baptisan air di gereja.</p>
                <button id="openBaptismRequestModal" class="mt-4 bg-gray-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-gray-900 hover:text-gray-200 transition duration-300">Open Form</button>
            </section>
        </div>

</div>
</section>
</div>

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





<div id="childDedicationModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="modal-content bg-white rounded-lg p-6 w-full max-w-[40rem] max-h-[80vh] overflow-y-auto">
        <span class="close text-gray-600 cursor-pointer float-right text-xl font-bold" id="closeChildDedicationModal">&times;</span>
        <h3 class="text-2xl font-semibold text-center mb-4">Form Penyerahan Anak</h3>
        <p class="text-gray-600 text-center mb-6">Lengkapi data berikut untuk penyerahan anak</p>
        <form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="form_type" value="penyerahan_anak">
            <div>
                <label for="nama_anak" class="block text-sm font-medium text-gray-700">Nama Anak <span class="text-red-500">*</span></label>
                <input type="text" name="nama_anak" id="nama_anak" placeholder="Nama" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="nomor_telp_penanggungjawab" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp_penanggungjawab_anak" id="nomor_telp_penanggungjawab" placeholder="No Telp" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="tempat_lahir_anak" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                <input type="text" name="tempat_lahir_anak" id="tempat_lahir_anak" placeholder="Tempat Lahir" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="tanggal_lahir_anak" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span> </label>
                <input type="date" name="tanggal_lahir_anak" id="tanggal_lahir_anak" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="nama_ayah_anak" class="block text-sm font-medium text-gray-700">Nama Ayah <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ayah_anak" id="nama_ayah_anak" placeholder="Nama Ayah" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="nama_ibu_anak" class="block text-sm font-medium text-gray-700">Nama Ibu <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ibu_anak" id="nama_ibu_anak" placeholder="Nama Ibu" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="alamat_anak" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_anak" id="alamat_anak" placeholder="Alamat" required class="border rounded p-2 w-full">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="kelurahan_anak" class="block text-sm font-medium text-gray-700">Kelurahan <span class="text-red-500">*</span></label>
                    <input type="text" name="kelurahan_anak" id="kelurahan_anak" placeholder="Kelurahan" required class="border rounded p-2 w-full">
                </div>

                <div>
                    <label for="kecamatan_anak" class="block text-sm font-medium text-gray-700">Kecamatan<span class="text-red-500">*</span></label>
                    <input type="text" name="kecamatan_anak" id="kecamatan_anak" placeholder="Kecamatan" required class="border rounded p-2 w-full">
                </div>
            </div>

            <div>
                <label for="asal_gereja_anak" class="block text-sm font-medium text-gray-700">Asal Gereja <span class="text-red-500">*</span></label>
                <input type="text" name="asal_gereja_anak" id="asal_gereja_anak" placeholder="Gereja Asal" required class="border rounded p-2 w-full">
            </div>

            <div>
                <label for="lama_ibadah_anak" class="block text-sm font-medium text-gray-700">Sudah Berapa Lama Beribadah (Tahun) <span class="text-red-500">*</span></label>
                <input type="text" name="lama_ibadah_anak" id="lama_ibadah_anak" placeholder="..thn" required class="border rounded p-2 w-full">
            </div>

            <div class="flex items-center space-x-4">
                <input type="checkbox" id="childDedication" name="services1" value="childDedication" class="form-checkbox h-5 w-5" onclick="toggleInput('tempat_asal_dibaptis','tanggal_dibaptis_gereja_lama')">
                <label for="childDedication" class="text-sm font-medium text-gray-700">Apakah Suami & Istri sudah dibaptis?</label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="tempat_asal_dibaptis" id="tempat_asal_dibaptis" class="hidden border rounded p-2" placeholder="Dimana?">
                <input type="date" name="tanggal_dibaptis_gereja_lama" id="tanggal_dibaptis_gereja_lama" class="hidden border rounded p-2">
            </div>

            <div class="flex items-center space-x-4">
                <input type="checkbox" id="childDedication2" name="services2" value="childDedication2" class="form-checkbox h-5 w-5" onclick="toggleInput('nomor_piagam_pernikahan_parent','tanggal_pernikahan')">
                <label for="childDedication2" class="text-sm font-medium text-gray-700">Apakah Suami & Istri sudah diberkati dalam nikah gereja?</label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="nomor_piagam_pernikahan_parent" id="nomor_piagam_pernikahan_parent" class="hidden border rounded p-2" placeholder="Nomor Piagam Pernikahan Gereja">
                <input type="date" name="tanggal_pernikahan" id="tanggal_pernikahan" class="hidden border rounded p-2">
            </div>

            <div class="flex items-center space-x-4">
                <input type="checkbox" id="childDedication3" name="services2" value="childDedication3" class="form-checkbox h-5 w-5" onclick="toggleInput('nomor_akte_pernikahan_parent','tanggal_akte_pernikahan')">
                <label for="childDedication3" class="text-sm font-medium text-gray-700">Apakah Suami & Istri sudah mengurus akte pernikahan di catatan sipil?</label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="nomor_akte_pernikahan_parent" id="nomor_akte_pernikahan_parent" class="hidden border rounded p-2" placeholder="Nomor Akte Pernikahan Gereja">
                <input type="date" name="tanggal_akte_pernikahan" id="tanggal_akte_pernikahan" class="hidden border rounded p-2">
            </div>

            <div>
                <label for="pas_foto_anak" class="block text-sm font-medium text-gray-700">Pas Foto Terbaru (4x6 cm) <span class="text-red-500">*</span></label>
                <input type="file" name="pas_foto_anak" id="pas_foto_anak" required class="border rounded p-2 w-full">
            </div>

            <button
                type="button"
                class="mt-2 bg-gray-500 text-white px-10 py-2 rounded confirmation-button w-full hover:bg-gray-700 transition duration-300">
                Submit
            </button>

        </form>
    </div>
</div>

<!-- Modal for Marriage Blessing -->
<div id="marriageBlessingModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="modal-content bg-white rounded-lg p-6 w-full max-w-[40rem] max-h-[80vh] overflow-y-auto">
        <span class="close text-gray-600 cursor-pointer float-right text-xl font-bold" id="closeMarriageBlessingModal">&times;</span>
        <h3 class="text-2xl font-semibold text-center mb-4">Form Pemberkatan Pernikahan/Didoakan</h3>
        <p class="text-gray-600 text-center mb-6">Lengkapi data berikut untuk pemberkatan pernikahan/didoakan</p>
        <form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="form_type" value="pernikahan">
            <!-- Section I: Permohonan Pemberkatan -->
            <h4 class="text-lg font-semibold mb-2">I. Permohonan Pemberkatan / Doa Pernikahan</h4>
            <div class="space-y-2">
                <label for="hari_pemberkatan" class="block text-sm font-medium text-gray-700">Hari Pemberkatan yang Direncanakan <span class="text-red-500">*</span></label>
                <input type="text" name="hari_pemberkatan" id="hari_pemberkatan" placeholder="Hari" required class="border rounded p-2 w-full">
                <input type="date" name="tanggal_pemberkatan" required class="border rounded p-2 w-full">

                <label for="pukul_pemberkatan" class="block text-sm font-medium text-gray-700">Pukul Pemberkatan <span class="text-red-500">*</span></label>
                <input type="time" name="pukul_pemberkatan" id="pukul_pemberkatan" required class="border rounded p-2 w-full">
            </div>
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="permohonan_pemberkatan1" id="permohonan_pemberkatan_acara" class="mr-2">
                <label for="permohonan_pemberkatan1" class="text-sm text-gray-700">Liturgi (Acara Kebaktian) </label>
            </div>
            <div class="flex items-center space-x-2">
                <input type="checkbox" id="permohonan_pemberkatan2" name="permohonan_pemberkatan2" class="mr-2">
                <label for="permohonan_pemberkatan2" class="text-sm text-gray-700">Pemberkatan Saja</label>
            </div>
            <!-- Section II: Data Calon Mempelai Pria -->
            <h4 class="text-lg font-semibold mb-2">II. Data Calon Mempelai Pria</h4>
            <div class="space-y-2">

                <label for="nama_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="nama_calon_mempelai_pria" id="nama_calon_mempelai_pria" placeholder="Nama" required class="border rounded p-2 w-full">

                <label for="nomor_telp_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp_calon_mempelai_pria" id="nomor_telp_calon_mempelai_pria" placeholder="Nomor telepon" required class="border rounded p-2 w-full">

                <label for="alamat_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_calon_mempelai_pria" id="alamat_calon_mempelai_pria" placeholder="Alamat" required class="border rounded p-2 w-full">

                <label for="tempat_lahir_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                <input type="text" name="tempat_lahir_calon_mempelai_pria" id="tempat_lahir_calon_mempelai_pria" placeholder="Tempat lahir" required class="border rounded p-2 w-full">

                <label for="tanggal_lahir_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_lahir_calon_mempelai_pria" id="tanggal_lahir_calon_mempelai_pria" required class="border rounded p-2 w-full">

                <label for="nomor_ktp_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nomor KTP <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_ktp_calon_mempelai_pria" id="nomor_ktp_calon_mempelai_pria" placeholder="Nomor ktp" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_surat_baptis_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nomor Surat Baptis <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_surat_baptis_calon_mempelai_pria" id="nomor_surat_baptis_calon_mempelai_pria" placeholder="Nomor surat baptis" required class="border rounded p-2 w-full mb-2">

                <label for="asal_gereja_baptis_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Gereja Calon mempelai dibaptis <span class="text-red-500">*</span></label>
                <input type="text" name="asal_gereja_baptis_calon_mempelai_pria" id="asal_gereja_baptis_calon_mempelai_pria" placeholder="Gereja calon mempelai dibaptis" required class="border rounded p-2 w-full mb-2">

                <label for="gereja_sekarang_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Berbakti di gereja <span class="text-red-500">*</span></label>
                <input type="text" name="gereja_sekarang_calon_mempelai_pria" id="gereja_sekarang_calon_mempelai_pria" placeholder="Berbakti di gereja" required class="border rounded p-2 w-full mb-2">

                <label for="pekerjaan_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="pekerjaan_calon_mempelai_pria" id="pekerjaan_calon_mempelai_pria" placeholder="Pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="alamat_pekerjaan_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Alamat Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_pekerjaan_calon_mempelai_pria" id="alamat_pekerjaan_calon_mempelai_pria" placeholder="Alamat pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="telp_pekerjaan_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nomor Telepon Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="telp_pekerjaan_calon_mempelai_pria" id="telp_pekerjaan_calon_mempelai_pria" placeholder="Nomor telepon pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="nama_ayah_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nama Ayah <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ayah_calon_mempelai_pria" id="nama_ayah_calon_mempelai_pria" placeholder="Nama ayah" required class="border rounded p-2 w-full mb-2">

                <label for="nama_ibu_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nama Ibu <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ibu_calon_mempelai_pria" id="nama_ibu_calon_mempelai_pria" placeholder="Nama ibu" required class="border rounded p-2 w-full mb-2">

                <label for="alamat_orangtua_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Alamat Orang Tua <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_orangtua_calon_mempelai_pria" id="alamat_orangtua_calon_mempelai_pria" placeholder="Alamat orang" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_telp_orangtua_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Nomor Telepon Orang Tua <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp_orangtua_calon_mempelai_pria" id="nomor_telp_orangtua_calon_mempelai_pria" placeholder="No telepon orang tua" required class="border rounded p-2 w-full mb-2">

                <label for="persetujuan_orangtua_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Apakah Sudah Mendapat Persetujuan dari orang tua? </label>
                <input type="checkbox" name="persetujuan_orangtua_calon_mempelai_pria" id="persetujuan_orangtua_calon_mempelai_pria" class="mr-2">

                <label for="riwayat_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Apakah Calon Mempelai Pria sudah pernah menikah?</label>
                <input type="checkbox" name="riwayat_calon_mempelai_pria" id="riwayat_calon_mempelai_pria" class="mr-2">

                <label for="status_calon_mempelai_pria" class="block text-sm font-medium text-gray-700">Apakah sudah berkumpul bersama seperti suami istri?</label>
                <input type="checkbox" name="status_calon_mempelai_pria" id="status_calon_mempelai_pria" class="mr-2">

            </div>

            <!-- Section III: Data Calon Mempelai Wanita -->
            <h4 class="text-lg font-semibold mb-2">III. Data Calon Mempelai Wanita</h4>
            <div class="space-y-2">

                <label for="nama_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nama <span class="text-red-500">*</span></label>
                <input type="text" name="nama_calon_mempelai_wanita" id="nama_calon_mempelai_wanita" placeholder="Nama" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_telp_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp_calon_mempelai_wanita" id="nomor_telp_calon_mempelai_wanita" placeholder="Nomor telepon" required class="border rounded p-2 w-full mb-2">

                <label for="alamat_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_calon_mempelai_wanita" id="alamat_calon_mempelai_wanita" placeholder="Alamat" required class="border rounded p-2 w-full mb-2">

                <label for="tempat_lahir_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                <input type="text" name="tempat_lahir_calon_mempelai_wanita" id="tempat_lahir_calon_mempelai_wanita" placeholder="Tempat lahir" required class="border rounded p-2 w-full mb-2">

                <label for="tanggal_lahir_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_lahir_calon_mempelai_wanita" id="tanggal_lahir_calon_mempelai_wanita" placeholder="Tanggal lahir" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_ktp_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nomor KTP <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_ktp_calon_mempelai_wanita" id="nomor_ktp_calon_mempelai_wanita" placeholder="Nomor ktp" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_surat_baptis_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nomor Surat Baptis <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_surat_baptis_calon_mempelai_wanita" id="nomor_surat_baptis_calon_mempelai_wanita" placeholder="Nomor surat baptis" required class="border rounded p-2 w-full mb-2">

                <label for="asal_gereja_baptis_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Gereja Calon mempelai dibaptis <span class="text-red-500">*</span></label>
                <input type="text" name="asal_gereja_baptis_calon_mempelai_wanita" id="asal_gereja_baptis_calon_mempelai_wanita" placeholder="Gereja calon mempelai dibaptis" required class="border rounded p-2 w-full mb-2">

                <label for="gereja_sekarang_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Berbakti di gereja <span class="text-red-500">*</span></label>
                <input type="text" name="gereja_sekarang_calon_mempelai_wanita" id="gereja_sekarang_calon_mempelai_wanita" placeholder="Berbakti di gereja" required class="border rounded p-2 w-full mb-2">

                <label for="pekerjaan_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="pekerjaan_calon_mempelai_wanita" id="pekerjaan_calon_mempelai_wanita" placeholder="Pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="alamat_pekerjaan_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Alamat Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_pekerjaan_calon_mempelai_wanita" id="alamat_pekerjaan_calon_mempelai_wanita" placeholder="Alamat pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="telp_pekerjaan_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nomor Telepon Pekerjaan <span class="text-red-500">*</span></label>
                <input type="text" name="telp_pekerjaan_calon_mempelai_wanita" id="telp_pekerjaan_calon_mempelai_wanita" placeholder="Nomor telepon pekerjaan" required class="border rounded p-2 w-full mb-2">

                <label for="nama_ayah_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nama Ayah <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ayah_calon_mempelai_wanita" id="nama_ayah_calon_mempelai_wanita" placeholder="Nama ayah" required class="border rounded p-2 w-full mb-2">

                <label for="nama_ibu_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nama Ibu <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ibu_calon_mempelai_wanita" id="nama_ibu_calon_mempelai_wanita" placeholder="Nama ibu" required class="border rounded p-2 w-full mb-2">

                <label for="alamat_orangtua_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Alamat Orang Tua <span class="text-red-500">*</span></label>
                <input type="text" name="alamat_orangtua_calon_mempelai_wanita" id="alamat_orangtua_calon_mempelai_wanita" placeholder="Alamat orang tua" required class="border rounded p-2 w-full mb-2">

                <label for="nomor_telp_orangtua_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Nomor Telepon Orang Tua <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp_orangtua_calon_mempelai_wanita" id="nomor_telp_orangtua_calon_mempelai_wanita" placeholder="Nomor telepon orang tua" required class="border rounded p-2 w-full mb-2">

                <label for="persetujuan_orangtua_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Apakah Sudah Mendapat Persetujuan dari orang tua?</label>
                <input type="checkbox" name="persetujuan_orangtua_calon_mempelai_wanita" id="persetujuan_orangtua_calon_mempelai_wanita" class="mr-2">

                <label for="riwayat_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Apakah Calon Mempelai Wanita sudah pernah menikah?</label>
                <input type="checkbox" name="riwayat_calon_mempelai_wanita" id="riwayat_calon_mempelai_wanita" class="mr-2">

                <label for="status_calon_mempelai_wanita" class="block text-sm font-medium text-gray-700">Apakah sudah berkumpul bersama seperti suami istri?</label>
                <input type="checkbox" name="status_calon_mempelai_wanita" id="status_calon_mempelai_wanita" class="mr-2">

            </div>

            <!-- Section IV: Surat Catatan Sipil -->
            <h4 class="text-lg font-semibold mb-2">IV. Surat Catatan Sipil</h4>
            <div class="space-y-2">

                <label for="cek_surat_sipil" class="block text-sm font-medium text-gray-700">Apakah sudah mengurus surat nikah di catatan sipil?</label>
                <input type="checkbox" name="cek_surat_sipil" id="cek_surat_sipil" class="mr-2" onclick="toggleInputSingle('file_surat_catatan_sipil')">

                <label for="file_surat_catatan_sipil" class="block text-sm font-medium text-gray-700">Apabila sudah, harap dilampirkan fotocopynya (wajib dalam bentuk PDF)</label>
                <input type="file" name="file_surat_catatan_sipil" id="file_surat_catatan_sipil" required class="mt-2 border hidden border border-gray-300 rounded px-2 py-1">

            </div>
            <button
                type="button"
                class="mt-2 bg-gray-500 text-white px-10 py-2 rounded confirmation-button w-full hover:bg-gray-700 transition duration-300">
                Submit
            </button>
        </form>
    </div>
</div>

<!-- Modal for Baptism Request -->
<div id="baptismRequestModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="modal-content bg-white rounded-lg p-6 w-full max-w-[40rem] max-h-[80vh] overflow-y-auto">
        <span class="close text-gray-600 cursor-pointer float-right text-xl font-bold" id="closeBaptismRequestModal">&times;</span>
        <h3 class="text-2xl font-semibold text-center mb-4">Baptism Request Form Requirements</h3>
        <p class="text-gray-600 text-center mb-6">Isi ketentuan untuk Baptism Request di sini</p>
        <form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="form_type" value="baptisan">
            <div>
                <label for="nama_pemohon_baptis" class="block text-sm font-medium text-gray-700">Nama Pemohon <span class="text-red-500">*</span></label>
                <input type="text" name="nama_anak" id="nama_pemohon_baptis" placeholder="Nama" required class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="nomor_telp_pemohon_baptis" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_telp" id="nomor_telp_pemohon_baptis" placeholder="Nomor telepon" required class="border rounded p-2 w-full">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="tempat_lahir_pemohon_baptis" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir_pemohon_baptis" placeholder="Tempat lahir" required class="border rounded p-2 w-full mb-2">
                </div>
                <div>
                    <label for="tanggal_lahir_pemohon_baptis" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir_pemohon_baptis" required class="border rounded p-2 w-full mb-2">
                </div>
            </div>
            <div>
                <label for="alamat_pemohon_baptis" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                <input type="text" name="alamat" id="alamat_pemohon_baptis" placeholder="Alamat" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="kelurahan_pemohon_baptis" class="block text-sm font-medium text-gray-700">Kelurahan <span class="text-red-500">*</span></label>
                <input type="text" name="kelurahan" id="kelurahan_pemohon_baptis" placeholder="Kelurahan" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="gereja_asal" class="block text-sm font-medium text-gray-700">Gereja Asal <span class="text-red-500">*</span></label>
                <input type="text" name="beribadah_di" id="gereja_asal" placeholder="Beribadah di " required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ayah" id="nama_ayah_pemohon_baptis" placeholder="Nama ayah" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu <span class="text-red-500">*</span></label>
                <input type="text" name="nama_ibu" id="nama_ibu_pemohon_baptis" placeholder="Nama ibu" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="tanggal_baptis" class="block text-sm font-medium text-gray-700">Tanggal Baptis yang diinginkan <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_baptis" id="tanggal_baptis" placeholder="Kapan ingin melakukan Pelaksanaan Baptisan?" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="pembaptis" class="block text-sm font-medium text-gray-700">Pendeta/Gembala yang akan Membaptis <span class="text-red-500">*</span></label>
                <input type="text" name="pembaptis" id="pembaptis" placeholder="Baptisan ingin dilayani/dilakukan oleh siapa?" required class="border rounded p-2 w-full mb-2">
            </div>
            <div>
                <label for="file_foto_pemohon_baptis" class="block text-sm font-medium text-gray-700">File Foto Pemohon Baptis (Pas foto 4x6cm) <span class="text-red-500">*</span></label>
                <input type="file" name="file_foto_pemohon_baptis" id="file_foto_pemohon_baptis" required class="mt-2 border border border-gray-300 rounded px-2 py-1">
            </div>
            <button
                type="button"
                class="mt-2 bg-gray-500 text-white px-10 py-2 rounded confirmation-button w-full hover:bg-gray-700 transition duration-300">
                Submit
            </button>

        </form>
    </div>
</div>


<script>
    // Mendapatkan elemen modal
    const childDedicationModal = document.getElementById('childDedicationModal');
    const marriageBlessingModal = document.getElementById('marriageBlessingModal');
    const baptismRequestModal = document.getElementById('baptismRequestModal');

    // Fungsi untuk membuka modal
    document.getElementById('openChildDedicationModal').onclick = function() {
        childDedicationModal.classList.remove('hidden');
    };

    document.getElementById('openMarriageBlessingModal').onclick = function() {
        marriageBlessingModal.classList.remove('hidden');
    };

    document.getElementById('openBaptismRequestModal').onclick = function() {
        baptismRequestModal.classList.remove('hidden');
    };



    // Fungsi untuk menutup modal
    document.getElementById('closeChildDedicationModal').onclick = function() {
        childDedicationModal.classList.add('hidden');
    };

    document.getElementById('closeMarriageBlessingModal').onclick = function() {
        marriageBlessingModal.classList.add('hidden');
    };

    document.getElementById('closeBaptismRequestModal').onclick = function() {
        baptismRequestModal.classList.add('hidden');
    };

    // Menutup modal saat mengklik di luar konten modal
    window.onclick = function(event) {
        if (event.target === childDedicationModal) {
            childDedicationModal.classList.add('hidden');
        }
        if (event.target === marriageBlessingModal) {
            marriageBlessingModal.classList.add('hidden');
        }
        if (event.target === baptismRequestModal) {
            baptismRequestModal.classList.add('hidden');
        }
    };

    function toggleInput(inputId1, inputId2) {
        const inputField1 = document.getElementById(inputId1);
        inputField1.classList.toggle('hidden');
        const inputField2 = document.getElementById(inputId2);
        inputField2.classList.toggle('hidden');
        // Menampilkan atau menyembunyikan input
    }

    function toggleInputSingle(inputId) {
        const inputField = document.getElementById(inputId);
        inputField.classList.toggle('hidden');
        // Menampilkan atau menyembunyikan input
    }

    AOS.init({
        duration: 1500,
    });
</script>


@endsection