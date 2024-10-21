
@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full items-start justify-center bg-gray-900 bg-blend-exclusion" style="background-image: url({{ asset('img/fotodalam.JPG') }}); background-size: cover; background-position: center;">
    <form action="{{ route('admin.storeYoutubeLink') }}" method="POST">
        @csrf
        <label for="url">Link YouTube Ibadah:</label>
        <input type="url" name="url" required>
        <button type="submit">Simpan</button>
    </form>
</div>
    
@endsection