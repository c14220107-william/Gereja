<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('title')</title> -->
    <title>GPPS Bethlehem Kutisari</title>
    <link rel="icon" href="{{ asset('img/logokutisari.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        
        @yield('content')
    </div>
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Cari semua tombol dengan class delete-button
            const deleteButtons = document.querySelectorAll('.delete-button');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data ini akan dihapus secara permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim form jika pengguna mengonfirmasi
                            e.target.closest('form').submit();
                        }
                    });
                });
            });
            const confirmButton = document.querySelectorAll('.confirmation-button');
            confirmButton.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Mencegah form langsung submit

                    const form = e.target.closest('form');

                    // Validasi form secara manual
                    if (!form.checkValidity()) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Harap lengkapi semua field yang wajib diisi.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return; // Hentikan proses jika form tidak valid
                    }

                    // Jika validasi berhasil, tampilkan SweetAlert untuk konfirmasi
                    Swal.fire({
                        title: 'Konfirmasi',
                        text: "Apakah data sudah sesuai semua? Data ini akan dikirim dan tidak bisa diulang lagi!",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, yakin',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit form jika konfirmasi disetujui

                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data telah berhasil dikirim.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                });
            });


                        
                    });
        

        
        

    </script>
     
     {{-- @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        </script>
    @endif --}}
    
</body>
</html>
