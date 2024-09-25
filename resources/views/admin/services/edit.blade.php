@extends('admin.layouts.app')

@section('content')
<h1>Edit Pelayanan: {{ $service->name }}</h1>

<form action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nama Pelayanan:</label>
        <input type="text" name="name" id="name" value="{{ $service->name }}" required>
    </div>

    <div>
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required>{{ $service->description }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>
@endsection
