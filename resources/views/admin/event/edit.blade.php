{{-- @extends('admin.layouts.app')

@section('content')
    <h1>Edit Event</h1>

    <form action="{{ route('event.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Judul Event</label>
        <input type="text" name="title" value="{{ $event->title }}" required>

        <label for="start">Waktu Mulai</label>
        <input type="datetime-local" name="start" value="{{ $event->start->format('Y-m-d\TH:i') }}" required>

        <label for="end">Waktu Selesai</label>
        <input type="datetime-local" name="end" value="{{ $event->end ? $event->end->format('Y-m-d\TH:i') : '' }}">

        <label for="description">Deskripsi</label>
        <textarea name="description">{{ $event->description }}</textarea>

        <button type="submit">Perbarui</button>
    </form>
@endsection --}}
