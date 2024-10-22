
@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-900 bg-opacity-80 bg-cover bg-center" style="background-image: url('{{ asset('img/fotodalam.JPG') }}');">
    <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Input Link Live Streaming YouTube Ibadah</h2>
        <form action="{{ route('admin.storeYoutubeLink') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="url" class="block text-gray-700 font-semibold">Link YouTube (embed) :</label>
                <input type="url" name="url" id="url" required class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-300">
                Simpan
            </button>
        </form>
    </div>
</div>

    
@endsection