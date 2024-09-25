@extends('admin.layouts.app')

@section('content')
<h1>Daftar Pelayanan Gereja</h1>

<a href="{{ route('services.create') }}">Tambah Pelayanan Baru</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
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
