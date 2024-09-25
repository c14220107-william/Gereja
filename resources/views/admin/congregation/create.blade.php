@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Jemaat</h1>
    <form action="{{ route('congregation.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="address">Alamat:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <button type="submit">Tambah Jemaat</button>
    </form>
@endsection
