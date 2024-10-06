<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>
<body>
    @include('admin.layouts.navbar')
    <div class="flex-grow container mx-auto py-6 px-4">
        @yield('content')
    </div>
</body>
</html>
