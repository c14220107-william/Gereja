@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto py-8 px-9">
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($form_baptisans->isEmpty())
        <a href="{{ route('manajemenJemaat.create3') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>
        <p class="text-center text-gray-500">Belum ada data yang tersedia.</p>
    @else
        <h2 class="text-2xl font-semibold mb-6">Manajemen Jemaat - Pendaftaran Baptisan Air</h2>

        <a href="{{ route('manajemenJemaat.create3') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah secara manual</a>

        <form id="actionForm" method="POST">
            @csrf
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border rounded-lg shadow-md">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">
                                <input type="checkbox" id="selectAll" class="w-4 h-4">
                            </th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Nomor Telepon</th>
                            <th class="py-2 px-4 border-b">Tempat Lahir</th>
                            <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                            <th class="py-2 px-4 border-b">Alamat</th>
                            <th class="py-2 px-4 border-b">Kelurahan</th>
                            <th class="py-2 px-4 border-b">Beribadah Di</th>
                            <th class="py-2 px-4 border-b">Nama Ayah</th>
                            <th class="py-2 px-4 border-b">Nama Ibu</th>
                            <th class="py-2 px-4 border-b">Tanggal Baptis</th>
                            <th class="py-2 px-4 border-b">Gembala Yang Membaptis</th>
                            <th class="py-2 px-4 border-b">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($form_baptisans as $item3)
                            <tr class="text-center">
                                <td class="py-2 px-4 border-b">
                                    <input type="checkbox" name="selected[]" value="{{ $item3->id }}" class="selectRow w-4 h-4">
                                </td>
                                <td class="py-2 px-4 border-b">{{ $item3->nama_anak }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->nomor_telp }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->tempat_lahir }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->tanggal_lahir }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->alamat }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->kelurahan }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->beribadah_di }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->nama_ayah }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->nama_ibu }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->tanggal_baptis }}</td>
                                <td class="py-2 px-4 border-b">{{ $item3->pembaptis }}</td>
                                <td class="py-2 px-4 border-b">
                                    @if($item3->file_foto_pemohon_baptis)
                                        <a href="{{ asset('storage/' . $item3->file_foto_pemohon_baptis) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $item3->file_foto_pemohon_baptis) }}" alt="Pas Foto" class="w-16 h-16 rounded-full object-cover">
                                        </a>
                                    @else
                                        <p>Belum ada foto</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Button -->
            <div class="flex justify-end space-x-4 mt-6">
                <button type="button" id="editButton" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Edit</button>
                <button type="button" id="deleteButton" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
            </div>
        </form>
    @endif
</div>

<script>
    // Handle "Select All" checkbox
    document.getElementById('selectAll').addEventListener('click', function () {
        const checkboxes = document.querySelectorAll('.selectRow');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });

    // Handle Edit button
    document.getElementById('editButton').addEventListener('click', function () {
        const selected = document.querySelectorAll('.selectRow:checked');
        if (selected.length === 1) {
            const id = selected[0].value;
            window.location.href = `/form3/${id}/edit`; // Redirect to Edit page
        } else {
            alert('Silakan pilih satu data untuk diedit.');
        }
    });

    // Handle Delete button
    document.getElementById('deleteButton').addEventListener('click', function () {
        const selected = document.querySelectorAll('.selectRow:checked');
        if (selected.length === 1) {
            const id = selected[0].value;
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                document.getElementById('actionForm').action = `/manajemenJemaat/${id}`;
                document.getElementById('actionForm').submit();
            }
        } else {
            alert('Silakan pilih satu data untuk dihapus.');
        }
    });
</script>
@endsection
