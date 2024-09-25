@extends('admin.layouts.app')

@section('content')
    <h1>Edit Jemaat</h1>
    <form action="{{ route('congregation.update', $congregation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ $congregation->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $congregation->email }}" required>
        </div>
        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ $congregation->phone }}" required>
        </div>
        <div>
            <label for="address">Alamat:</label>
            <input type="text" id="address" name="address" value="{{ $congregation->address }}" required>
        </div>
        <button type="submit">Update Jemaat</button>
    </form>
@endsection
