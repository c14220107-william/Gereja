<nav id="navbar" class="bg-black fixed top-0 left-0 w-full z-50 shadow-lg transition-transform duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logokutisari.png') }}" class="h-10" alt="Logo" />
            <span class="self-center text-2xl font-bold text-white">GPPS Bethlehem</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-8 h-8 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-300" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto mx-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                @if (Auth::check())
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-4 rounded {{ Request::is('/') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('service-registration') }}" class="block py-2 px-4 rounded {{ Request::is('service-registration') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">Registration</a>
                    </li>
                    <li>
                        <a href="{{ route('onlineworship') }}" class="block py-2 px-4 rounded {{ Request::is('onlineworship') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">Online Service</a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}" class="block py-2 px-4 rounded {{ Request::is('faq') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">FAQ</a>
                    </li>
                    <!-- <li>
                        <form action="{{ route('admin.logout') }}"  method="POST" class="block py-2 px-4 rounded {{ Request::is('admin.logout') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">
                            @csrf
                            <button type="submit" >Logout</button>
                        </form>
                    </li> -->
                @else
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-4 rounded {{ Request::is('/') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('service-registration') }}" class="block py-2 px-4 rounded {{ Request::is('service-registration') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">Registration</a>
                </li>
                <li>
                    <a href="{{ route('onlineworship') }}" class="block py-2 px-4 rounded {{ Request::is('onlineworship') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">Online Service</a>
                </li>
                <li>
                    <a href="{{ route('faq') }}" class="block py-2 px-4 rounded {{ Request::is('faq') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">FAQ</a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.login') }}" class="block py-2 px-4 rounded {{ Request::is('admin.login') ? 'text-white bg-gray-800' : 'text-gray-200 hover:bg-gray-800 md:hover:bg-transparent md:hover:text-white transition duration-300' }}">Login</a>
                </li> --}}
            @endif

                    
            </ul>

        </div>
    </div>
</nav>

<style>
  /* Atur efek blur dan transparansi pada navbar */
  nav {
      background: rgba(0, 0, 0, 0.7); /* Transparansi lebih tinggi */
      backdrop-filter: blur(8px);
      transition: transform 0.3s ease-in-out; /* Transisi saat muncul/hilang */
  }
</style>

<script>
  let lastScrollTop = 0;
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", function() {
      let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop === 0) {
          // Kalo navbarnya di posisi paling atas, navbarnya jadi hitam penuh
          navbar.style.backgroundColor = "rgba(0, 0, 0, 1)"; // Hitam penuh
      } else {
          // Jika scroll  ke bawah atau ke atas, navbar jadi hitam transparan
          navbar.style.backgroundColor = "rgba(0, 0, 0, 0.5)"; // Hitam dengan transparansi 50%
      }

      lastScrollTop = scrollTop;
  });
</script>




