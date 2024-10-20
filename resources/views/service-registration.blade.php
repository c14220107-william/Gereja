    @extends('layouts.app')

    @section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Service Registration</h1>

        <!-- Child Dedication Section (Hero Style) -->
        <section class="relative mb-8 bg-gradient-to-r from-blue-400 to-blue-600 p-8 rounded-lg shadow-lg text-white" data-aos="fade-right">
            <h2 class="text-4xl font-bold mb-4">Permohonan Penyerahan Anak</h2>
            <p class="text-lg">Ajukan permohonan penyerahan anak Anda secara mudah melalui form online.</p>
            <button id="openChildDedicationModal" class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-blue-500 hover:text-white transition duration-300">Open Form</button>
        </section>

    <!-- Marriage Blessing Section (Hero Style) -->
        <section class="relative mb-8 bg-gradient-to-r from-green-400 to-green-600 p-8 rounded-lg shadow-lg text-white" data-aos="fade-left">
            <h2 class="text-4xl font-bold mb-4">Permohonan Pemberkatan Pernikahan/Didoakan</h2>
            <p class="text-lg">Daftarkan pemberkatan pernikahan Anda dan dapatkan doa khusus.</p>
            <button id="openMarriageBlessingModal" class="mt-4 bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-green-500 hover:text-white transition duration-300">Open Form</button>
        </section>

    <!-- Baptism Request Section (Hero Style) -->
        <section class="relative mb-8 bg-gradient-to-r from-yellow-400 to-yellow-600 p-8 rounded-lg shadow-lg text-white" data-aos="fade-right">
            <h2 class="text-4xl font-bold mb-4">Permohonan Baptisan Air</h2>
            <p class="text-lg">Daftar untuk mengikuti upacara baptisan air di gereja.</p>
            <button id="openBaptismRequestModal" class="mt-4 bg-white text-yellow-600 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 hover:text-white transition duration-300">Open Form</button>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-extrabold mb-4">Pendaftaran Layanan Gereja</h1>
                <p class="text-lg text-gray-600">Daftarkan layanan anak-anak, pernikahan, dan baptisan dengan mudah.</p>
            </div>
        </section>


        <!-- Modal for Child Dedication -->
        <div id="childDedicationModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="modal-content bg-white rounded-lg p-6 w-13/14 max-w-[40rem] max-h-[80vh] overflow-y-auto">
                <span class="close text-gray-600 cursor-pointer float-right" id="closeChildDedicationModal">&times;</span>
                <h3 class="text-xl font-semibold mb-4">Penyerahan Anak Form Requirements</h3>
                <p>Isi ketentuan untuk Penyerahan Anak di sini.</p>
                <form action ="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <input type="hidden" name="form_type" value="penyerahan_anak">
                    Nama Anak<input type="text" name="nama_anak" id="nama_anak" placeholder="Nama" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon<input type="text" name="nomor_telp_penanggungjawab_anak" id="nomor_telp_penanggungjawab" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Tempat Lahir<input type="text" name="tempat_lahir_anak" id="tempat_lahir_anak" placeholder="Tempat Lahir" required class="border rounded p-2 w-full mb-2">
                    Tanggal Lahir<input type="date" name="tanggal_lahir_anak" id="tanggal_lahir_anak" required class="border rounded p-2 w-full mb-2">
                    Nama Ayah<input type="text" name="nama_ayah_anak" id= "nama_ayah_anak" placeholder="Nama Ayah" required class="border rounded p-2 w-full mb-2">
                    Nama Ibu<input type="text" name="nama_ibu_anak" id="nama_ibu_anak" placeholder="Nama Ibu" required class="border rounded p-2 w-full mb-2">
                    Alamat<input type="text" name="alamat_anak" id="alamat_anak" placeholder="Alamat" required class="border rounded p-2 w-full mb-2">
                    Kelurahan<input type="text" name="kelurahan_anak" id="kelurahan_anak" placeholder="Kelurahan" required class="border rounded p-2 w-full mb-2">
                    Kecamatan<input type="text" name="kecamatan_anak" id="kecamatan_anak" placeholder="Kecamatan" required class="border rounded p-2 w-full mb-2">        
                    Asal Gereja<input type="text" name="asal_gereja_anak" id="asal_gereja_anak" placeholder="Gereja Asal" required class="border rounded p-2 w-full mb-2">
                    Berapa Lama<input type="text" name="lama_ibadah_anak" id="lama_ibadah_anak" placeholder="Sudah Berapa Lama Beribadah (..thn)" required class="border rounded p-2 w-full mb-2">
                    <input type="checkbox" id="childDedication" name="services1" value="childDedication" class="mr-2" onclick="toggleInput('tempat_asal_dibaptis','tanggal_dibaptis_gereja_lama')">
                    <label for="childDedication" class="text-gray-700">Apakah Suami&Istri sudah dibaptis?</label>
                    <p></p>
                    <input type="text" name="tempat_asal_dibaptis" id="tempat_asal_dibaptis" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Dimana?"> <input type="date" name="tanggal_dibaptis_gereja_lama" id="tanggal_dibaptis_gereja_lama" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">
                    <p></p>
                    <input type="checkbox" id="childDedication2" name="services2" value="childDedication2" class="mr-2" onclick="toggleInput('nomor_piagam_pernikahan_parent','tanggal_pernikahan')">
                    <label for="childDedication2" class="text-gray-700">Apakah Suami&Istri sudah diberkati dalam nikah gereja?</label>  
                    <input type="text" name="nomor_piagam_pernikahan_parent" id="nomor_piagam_pernikahan_parent" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Nomor Piagam Pernikahan Gereja"> <input type="date"  name="tanggal_pernikahan" id="tanggal_pernikahan" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">
                    <p></p>
                    <input type="checkbox" id="childDedication3" name="services2" value="childDedication3" class="mr-2" onclick="toggleInput('nomor_akte_pernikahan_parent','tanggal_akte_pernikahan')">
                    <label for="childDedication3" class="text-gray-700">Apakah Suami&Istri sudah mengurus akte pernikahan di catatan sipil?</label>
                    <input type="text" name="nomor_akte_pernikahan_parent" id="nomor_akte_pernikahan_parent" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Nomor Akte Pernikahan Gereja"> <input type="date" name="tanggal_akte_pernikahan" id="tanggal_akte_pernikahan" class="mt-2 hidden border border-gray-300 rounded px-2 py-1" placeholder="Masukkan detail tambahan">
                    <p></p>
                    Pas Foto Terbaru 4x6cm <input type="file" name="pas_foto_anak" id="pas_foto_anak" required class="border rounded p-2 w-full mb-2">

                    

                    <p></p>


                    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded items-center">Submit</button>
                </form>
            </div>
        </div>

        <!-- Modal for Marriage Blessing -->
        <div id="marriageBlessingModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="modal-content bg-white rounded-lg p-6 w-13/14 max-w-[40rem] max-h-[80vh] overflow-y-auto">
                <span class="close text-gray-600 cursor-pointer float-right" id="closeMarriageBlessingModal">&times;</span>
                <h3 class="text-xl font-semibold mb-4">Marriage Blessing Form Requirements</h3>
                <p>Isi ketentuan untuk Marriage Blessing di sini.</p>
                <form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <input type="hidden" name="form_type" value="pernikahan">
                    <p>I. Permohonan Pemberkatan / Doa Pernikahan</p>
                    Hari Pemberkatan yang direncanakan<input type="text" name="hari_pemberkatan" id="hari_pemberkatan" placeholder="Hari" required class="border rounded p-2 w-full mb-2"><input type="date" name="tanggal_pemberkatan" required class="border rounded p-2 w-full mb-2">
                    Pukul Pemberkatan<input type="time" name="pukul_pemberkatan" id="pukul_pemberkatan" placeholder="Pukul" required class="border rounded p-2 w-full mb-2">
                    <input type="checkbox" name="permohonan_pemberkatan1" id="permohonan_pemberkatan_acara" class="mr-2">
                    <label for="permohonan_pemberkatan1" class="text-gray-700">Liturgi (Acara Kebaktian) </label>
                    <p></p>
                    <input type="checkbox" id="permohonan_pemberkatan2" name="permohonan_pemberkatan2" class="mr-2">
                    <label for="permohonan_pemberkatan2" class="text-gray-700">Pemberkatan Saja</label>
                    <p></p>
                    <p>II. Data Calon Mempelai Pria</p>
                    Nama<input type="text" name="nama_calon_mempelai_pria" id="nama_calon_mempelai_pria" placeholder="Nama" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon<input type="text" name="nomor_telp_calon_mempelai_pria" id="nomor_telp_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat<input type="text" name="alamat_calon_mempelai_pria" id="alamat_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Tempat Lahir<input type="text" name="tempat_lahir_calon_mempelai_pria" id="tempat_lahir_calon_mempelai_pria" placeholder="Tempat Lahir" required class="border rounded p-2 w-full mb-2">
                    Tanggal Lahir<input type="date" name="tanggal_lahir_calon_mempelai_pria" id="tanggal_lahir_calon_mempelai" required class="border rounded p-2 w-full mb-2">
                    Nomor KTP<input type="text" name="nomor_ktp_calon_mempelai_pria" id="nomor_ktp_calon_mempelai_pria" placeholder="No ktp" required class="border rounded p-2 w-full mb-2">
                    Nomor Surat Baptis <input type="text" name="nomor_surat_baptis_calon_mempelai_pria" id="nomor_surat_baptis_calon_mempelai_pria" placeholder="No surat baptis" required class="border rounded p-2 w-full mb-2"> 
                    Gereja Calon mempelai dibaptis<input type="text" name="asal_gereja_baptis_calon_mempelai_pria" id="asal_gereja_baptis_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Berbakti di gereja<input type="text" name="gereja_sekarang_calon_mempelai_pria" id="gereja_sekarang_calon_mempelai_pria" placeholder="berbakti di gereja" required class="border rounded p-2 w-full mb-2">
                    Pekerjaan <input type="text" name="pekerjaan_calon_mempelai_pria" id="pekerjaan_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat Pekerjaan<input type="text" name="alamat_pekerjaan_calon_mempelai_pria" id="alamat_pekerjaan_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon Pekerjaan<input type="text" name="telp_pekerjaan_calon_mempelai_pria"  id= "telp_pekerjaan_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nama Ayah<input type="text" name="nama_ayah_calon_mempelai_pria" id="nama_ayah_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nama Ibu<input type="text" name="nama_ibu_calon_mempelai_pria" id="nama_ibu_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat Orang Tua<input type="text" name="alamat_orangtua_calon_mempelai_pria" id="alamat_orangtua_calon_mempelai_pria" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon Orang Tua<input type="text" name="nomor_telp_orangtua_calon_mempelai_pria" id="nomor_telp_orangtua_calon_mempelai_pria" placeholder="Nomor Telp" required class="border rounded p-2 w-full mb-2">
                    Apakah Sudah Mendapat Persetujuan dari orang tua?<input type="checkbox" name="persetujuan_orangtua_calon_mempelai_pria" id="persetujuan_orangtua_calon_mempelai_pria" class="mr-2"> 
                    <p></p>
                    Apakah Calon Mempelai Pria sudah pernah menikah?<input type="checkbox" name="riwayat_calon_mempelai_pria" id="riwayat_calon_mempelai_pria"  class="mr-2"> 
                    <p></p>
                    Apakah sudah berkumpul bersama seperti suami istri?<input type="checkbox" name="status_calon_mempelai_pria" id="status_calon_mempelai_pria"  class="mr-2">
                    <p></p>
                    <p>III. Data Calon Mempelai Wanita</p>
                    Nama<input type="text" name="nama_calon_mempelai_wanita" id="nama_calon_mempelai_wanita" placeholder="Nama" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon<input type="text" name="nomor_telp_calon_mempelai_wanita" id="nomor_telp_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat<input type="text" name="alamat_calon_mempelai_wanita" id="alamat_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Tempat Lahir<input type="text" name="tempat_lahir_calon_mempelai_wanita" id="tempat_lahir_calon_mempelai_wanita" placeholder="Tempat Lahir" required class="border rounded p-2 w-full mb-2">
                    Tanggal Lahir<input type="date" name="tanggal_lahir_calon_mempelai_wanita" id="tanggal_lahir_calon_mempelai_wanita" required class="border rounded p-2 w-full mb-2">
                    Nomor KTP<input type="text" name="nomor_ktp_calon_mempelai_wanita" id="nomor_ktp_calon_mempelai_wanita" placeholder="No ktp" required class="border rounded p-2 w-full mb-2">
                    Nomor Surat Baptis <input type="text" name="nomor_surat_baptis_calon_mempelai_wanita" id="nomor_surat_baptis_calon_mempelai_wanita" placeholder="No surat baptis" required class="border rounded p-2 w-full mb-2"> 
                    Gereja Calon mempelai dibaptis<input type="text" name="asal_gereja_baptis_calon_mempelai_wanita" id="asal_gereja_baptis_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Berbakti di gereja<input type="text" name="gereja_sekarang_calon_mempelai_wanita" id="gereja_sekarang_calon_mempelai_wanita" placeholder="berbakti di gereja" required class="border rounded p-2 w-full mb-2">
                    Pekerjaan <input type="text" name="pekerjaan_calon_mempelai_wanita" id="pekerjaan_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat Pekerjaan<input type="text" name="alamat_pekerjaan_calon_mempelai_wanita" id="alamat_pekerjaan_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon Pekerjaan<input type="text" name="telp_pekerjaan_calon_mempelai_wanita"  id= "telp_pekerjaan_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nama Ayah<input type="text" name="nama_ayah_calon_mempelai_wanita" id="nama_ayah_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nama Ibu<input type="text" name="nama_ibu_calon_mempelai_wanita" id="nama_ibu_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Alamat Orang Tua<input type="text" name="alamat_orangtua_calon_mempelai_wanita" id="alamat_orangtua_calon_mempelai_wanita" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon Orang Tua<input type="text" name="nomor_telp_orangtua_calon_mempelai_wanita" id="nomor_telp_orangtua_calon_mempelai_wanita" placeholder="Nomor Telp" required class="border rounded p-2 w-full mb-2">
                    Apakah Sudah Mendapat Persetujuan dari orang tua?<input type="checkbox" name="persetujuan_orangtua_calon_mempelai_wanita" id="persetujuan_orangtua_calon_mempelai_wanita" class="mr-2"> 
                    <p></p>
                    Apakah Calon Mempelai Wanita sudah pernah menikah?<input type="checkbox" name="riwayat_calon_mempelai_wanita" id="riwayat_calon_mempelai_wanita"  class="mr-2"> 
                    <p></p>
                    Apakah sudah berkumpul bersama seperti suami istri?<input type="checkbox" name="status_calon_mempelai_wanita" id="status_calon_mempelai_wanita"  class="mr-2">

                    <p>IV. Surat Catatan Sipil</p>
                    Apakah sudah mengurus surat nikah di catatan sipil?<input type="checkbox" name="cek_surat_sipil" class="mr-2" onclick="toggleInputSingle('file_surat_catatan_sipil')">
                    <label for="cek_surat_sipil" class="text-gray-700">Apabila sudah, harap dilampirkan fotocopynya (wajib dalam bentuk PDF)</label>
                    <input type="file" name="file_surat_catatan_sipil" id="file_surat_catatan_sipil" class="mt-2 hidden border border-gray-300 rounded px-2 py-1">
                    <p></p>
                    <button type="submit"   class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Submit</button>
                </form>
            </div>
        </div>

        <!-- Modal for Baptism Request -->
        <div id="baptismRequestModal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="modal-content bg-white rounded-lg p-6 w-13/14 max-w-[40rem] max-h-[80vh] overflow-y-auto">
                <span class="close text-gray-600 cursor-pointer float-right" id="closeBaptismRequestModal">&times;</span>
                <h3 class="text-xl font-semibold mb-4">Baptism Request Form Requirements</h3>
                <p>Isi ketentuan untuk Baptism Request di sini.</p>
                <form action="{{ route('Form.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    <input type="hidden" name="form_type" value="baptisan">

                    @csrf
                    Nama Pemohon<input type="text" name="nama_anak" id="nama_pemohon_baptis" placeholder="Nama" required class="border rounded p-2 w-full mb-2">
                    Nomor Telepon<input type="text" name="nomor_telp" id="nomor_telp_pemohon_baptis" placeholder="No Telp" required class="border rounded p-2 w-full mb-2">
                    Tempat Lahir<input type="text" name="tempat_lahir" id="tempat_lahir_pemohon_baptis" placeholder="Tempat Lahir" required class="border rounded p-2 w-full mb-2">
                    Tanggal Lahir<input type="date" name="tanggal_lahir" id="tanggal_lahir_pemohon_baptis" required class="border rounded p-2 w-full mb-2">
                    Alamat<input type="text" name="alamat" id="alamat_pemohon_baptis" placeholder="Alamat" required class="border rounded p-2 w-full mb-2">
                    Kelurahan<input type="text" name="kelurahan" id="kelurahan_pemohon_baptis" placeholder="Kelurahan" required class="border rounded p-2 w-full mb-2">
                    Asal Gereja<input type="text" name="beribadah_di" id="gereja_asal" placeholder="Beribadah di " required class="border rounded p-2 w-full mb-2">
                    Nama Ayah<input type="text" name="nama_ayah" id="nama_ayah_pemohon_baptis" placeholder="Nama Ayah" required class="border rounded p-2 w-full mb-2">
                    Nama Ibu<input type="text" name="nama_ibu" id="nama_ibu_pemohon_baptis" placeholder="Nama Ibu" required class="border rounded p-2 w-full mb-2">
                    Tanggal Baptis yang diinginkan<input type="date" name="tanggal_baptis" id="tanggal_baptis" placeholder="Kapan ingin melakukan Pelaksanaan Baptisan?" required class="border rounded p-2 w-full mb-2">
                    Pendeta/Gembala yang akan Membaptis<input type="text" name="pembaptis" id="pembaptis" placeholder="Baptisan ingin dilayani/dilakukan oleh siapa?" required class="border rounded p-2 w-full mb-2">
                    <p>Pas foto 4x6cm</p><input type="file" name="file_foto_pemohon_baptis" id="file_foto_pemohon_baptis" required class="border rounded p-2 w-full mb-2">
                    <p></p>
                    <button type="submit"   class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Submit</button>
                </form>
            </div>
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
    function toggleInput(inputId1,inputId2) {
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
        duration: 1500, // durasi animasi dalam milidetik
        // animasi hanya terjadi sekali
        
    });


    </script>


    @endsection
        