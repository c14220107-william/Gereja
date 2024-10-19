<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex items-center justify-between p-4">
      <a class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('img/logokutisari.png') }}" class="h-12" alt="GPPS Bethlehem Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GPPS Bethlehem</span>
      </a>
    </div>
</nav>
</head>
<body>
    <div class="flex-grow container">
        @yield('content')
    </div>
</body>
</html>