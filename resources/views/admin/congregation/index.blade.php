@extends('admin.layouts.app')

@section('content')
    <h1>Manajemen Jemaat</h1>
    <a href="{{ route('congregation.create') }}">Tambah Jemaat</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($congregations as $congregation)
                <tr>
                    <td>{{ $congregation->name }}</td>
                    <td>{{ $congregation->email }}</td>
                    <td>{{ $congregation->phone }}</td>
                    <td>{{ $congregation->address }}</td>
                    <td>
                        <a href="{{ route('congregation.edit', $congregation->id) }}">Edit</a>
                        <form action="{{ route('congregation.destroy', $congregation->id) }}" method="POST">
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
