@extends('layouts.app')

@section('content')
    <h1>Registrasi Pelayanan</h1>
    <form method="POST" action="{{ route('service-registration') }}">
        @csrf
        <!-- Field input untuk pendaftaran -->
        <button type="submit">Daftar</button>
    </form>
@endsection
    