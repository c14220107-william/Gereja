@extends('admin.layouts.app')

@section('content')
<h1>Tambah Pelayanan Baru</h1>

<form action="{{ route('services.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama Pelayanan:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
