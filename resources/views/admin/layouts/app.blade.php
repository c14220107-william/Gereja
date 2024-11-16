<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Di dalam <head> atau sebelum penutupan </body> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    

</head>
<body>
    @include('admin.layouts.navbar')
    <div class="flex-grow container overflow-scroll ">
        @yield('content')
    </div>
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

            const confirmButton = document.querySelectorAll('.confirmation-button')
            confirmButton.forEach(button => {
                button.addEventListener('click', (e) => {
                    Swal.fire({
                        title: 'Konfirmasi',
                        text: "Data ini akan dihapus secara permanen!",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, yakin',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim form jika pengguna mengonfirmasi
                            e.target.closest('form').submit();
                        }
                    });
                });
            });

        });
    </script>
    
</body>


</html>
