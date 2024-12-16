<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* CSS untuk sticky navbar */
        nav {
            position: sticky; /* Membuat navbar sticky */
            top: 0; /* Menjaga navbar tetap di atas */
            z-index: 1000; /* Menjaga navbar tetap di atas konten */
            background-color: white; /* Warna latar belakang navbar */
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white border-gray-200 dark:bg-black">
        <div class="max-w-screen-xl flex items-center justify-between p-4">
            <a class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logokutisari.png') }}" class="h-12" alt="GPPS Bethlehem Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GPPS Bethlehem</span>
            </a>
        </div>
    </nav>

    <!-- Konten -->
    <div class="flex-grow container mx-auto">
        @yield('content')
    </div>

</body>
</html>