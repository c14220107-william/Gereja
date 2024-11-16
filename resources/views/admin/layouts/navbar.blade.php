<div class="flex h-screen bg-gray-100">
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
        <li>
          <a href="{{ route('manajemenJemaat.index') }}" class="block px-4 py-2 rounded-md hover:bg-gray-700 {{ Request::is('manajemen_jemaat.index') ? 'bg-blue-700' : '' }}">Manajemen Form</a>
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