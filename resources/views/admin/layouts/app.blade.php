<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @include('admin.layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
