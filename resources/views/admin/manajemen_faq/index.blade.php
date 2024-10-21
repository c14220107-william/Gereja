@extends('admin.layouts.app')

@section('content')
<div class="min-h-screen flex w-full items-start justify-center bg-gray-900 bg-blend-exclusion" style="background-image: url({{ asset('img/fotodalam.JPG') }}); background-size: cover; background-position: center;">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">

        @foreach ($kritik_sarans as $faq)
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">Pengirim:{{$faq->name}}</h2>
            <p class="text-3xl mt-4">Kritik atau Saran: {{$faq->kritikSaran}}</p>
        </div>
        @endforeach

        
        

    </div>
</div>
    
@endsection