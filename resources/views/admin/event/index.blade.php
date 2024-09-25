@extends('admin.layouts.app')

@section('content')
    <h1>Manajemen Kalender</h1>

    <div id="calendar"></div> <!-- Ini adalah div untuk menampung kalender -->

    <a href="{{ route('event.create') }}">Tambah Event</a>

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->start }}</td>
                    <td>{{ $event->end ?? 'Tidak ada waktu selesai' }}</td>
                    <td>
                        <a href="{{ route('event.edit', $event->id) }}">Edit</a>
                        <form action="{{ route('event.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js"></script> <!-- Tambahkan FullCalendar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/admin/events/data', // Mengambil data dari route
                editable: true,
                droppable: true,
                // Fitur tambahan seperti menambah event langsung di calendar
            });
            calendar.render();
        });
    </script>
    
    <div id="calendar"></div>
    
@endsection
