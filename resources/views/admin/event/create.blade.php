@extends('admin.layouts.app')

@section('content')
    <h1>Tambah Event</h1>

    <form action="{{ route('event.store') }}" method="POST">
        @csrf

        <label for="title">Judul Event</label>
        <input type="text" name="title" required>

        <label for="start">Waktu Mulai</label>
        <input type="datetime-local" name="start" required>

        <label for="end">Waktu Selesai</label>
        <input type="datetime-local" name="end">

        <label for="description">Deskripsi</label>
        <textarea name="description"></textarea>

        <button type="submit">Simpan</button>
    </form>
@endsection
