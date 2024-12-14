@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#F4F4F6] relative"> <!-- Background abu-abu muda -->
    <!-- Tambahkan gambar latar belakang yang halus -->
    <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('{{ asset('img/your-background-image.jpg') }}');"></div> <!-- Gambar latar belakang -->

    <div class="bg-white p-8 rounded-lg shadow-2xl max-w-lg w-full transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-3xl relative z-10">
        <h2 class="text-3xl font-extrabold text-center text-black mb-8">Input Link Live Streaming YouTube Ibadah</h2>

        <!-- Menampilkan pesan sukses atau error -->
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.storeYoutubeLink') }}" method="POST" class="space-y-6">
            @csrf
            <div class="relative">
                <label for="url" class="block text-black font-semibold text-lg mb-2 flex items-center">
                    <i class="fas fa-link mr-2 text-gray-600 text-xl"></i> <!-- Ikon link -->
                    Link YouTube (embed) :
                </label>
                <input type="url" name="url" id="url" required class="w-full px-4 py-3 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-black focus:outline-none text-black transition-all duration-300 ease-in-out"
                    placeholder="Masukkan URL YouTube"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan URL YouTube'" 
                    id="urlInput">

                <!-- Menampilkan pesan error jika URL tidak valid -->
                @error('url')
                    <div class="text-red-600 text-sm mt-2 animate-pulse">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="w-full py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-black">
                    Simpan
                </button>
            </div>
        </form>

        <!-- Menampilkan Link yang Aktif -->
        @if(isset($link) && $link->url)
        <h3 class="text-base md:text-lg lg:text-xl font-bold text-center text-gray-800 mt-4 bg-gray-200 p-4 rounded-lg shadow-inner">
            <p class="block text-gray-800 font-bold">Link yang Aktif:</p>
            <a href="{{ $link->url }}" target="_blank" 
               class="text-black-600 hover:underline break-words block w-full max-w-sm mx-auto">
                {{ $link->url }}
            </a>
        </h3>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    // Real-time URL Validation with JavaScript
    const urlInput = document.getElementById('urlInput');
    const form = document.querySelector('form');

    urlInput.addEventListener('input', function() {
        const value = urlInput.value;
        const isValidYoutube = /^https:\/\/(www\.)?youtube\.com\//.test(value);

        if (isValidYoutube) {
            urlInput.classList.remove('border-red-500');
            urlInput.classList.add('border-green-500');
        } else {
            urlInput.classList.remove('border-green-500');
            urlInput.classList.add('border-red-500');
        }
    });

    form.addEventListener('submit', function(event) {
        if (!/^https:\/\/(www\.)?youtube\.com\//.test(urlInput.value)) {
            event.preventDefault();
            alert("Harap masukkan URL yang valid dari YouTube.");
        }
    });
</script>
@endsection
