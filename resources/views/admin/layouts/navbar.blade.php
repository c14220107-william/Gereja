<div class="w-64 bg-black text-white flex flex-col">
  <a href="{{ route('admin.dashboard') }}" class="flex items-center p-4 space-x-3">
    <img src="{{ asset('img/logokutisari.png') }}" class="h-12" alt="Logo" />
    <span class="text-xl font-semibold">GPPS Bethlehem</span>
  </a>

  <nav class="mt-6">
    <ul class="space-y-2">
      <li>
        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700 {{ Request::is('/') ? 'bg-blue-700' : '' }}">Dashboard</a>
      </li>
      <li class="relative">
        <button class="flex items-center justify-between w-full px-4 py-2 rounded-md hover:bg-gray-700 {{ Request::is('manajemenJemaat.index') ? 'bg-blue-700' : '' }}" type="button" onclick="toggleDropdown(this)">
          <span>Manajemen Form</span>
          <svg class="w-5 h-5 transform transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.98l3.71-3.75a.75.75 0 011.08 1.04l-4.24 4.3a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <ul class="hidden mt-2 space-y-2 px-4" id="dropdown-menu">
          <li>
            <a href="{{ route('manajemenJemaat.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700">Pendaftaran Penyerahan Anak</a>
          </li>
          <li>
            <a href="{{ route('manajemenJemaat.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700">Pendaftaran Pernikahan</a>
          </li>
          <li>
            <a href="{{ route('manajemenJemaat.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700">Pendaftaran Baptisan Air</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ route('manajemen_faq.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700 {{ Request::is('manajemen_faq.index') ? 'bg-blue-700' : '' }}">Manajemen FAQ</a>
      </li>
      <li>
        <a href="{{ route('manajemen_liveStreaming.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700 {{ Request::is('manajemen_liveStreaming.index') ? 'bg-blue-700' : '' }}">Manajemen Live Streaming</a>
      </li>
      <li>
        <form action="{{ route('admin.logout') }}" method="POST" class="w-full">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 rounded-md hover:bg-gray-700">Logout</button>
        </form>
      </li>
    </ul>
  </nav>
</div>

<script>
  function toggleDropdown(button) {
    const menu = button.nextElementSibling;
    menu.classList.toggle('hidden');
    button.querySelector('svg').classList.toggle('rotate-180');
  }
</script>


