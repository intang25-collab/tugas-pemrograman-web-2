@extends('app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Daftar Penulis</h2>

    <a href="{{ route('writers.create') }}"
        class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Penulis
    </a>

    @if ($writers->isEmpty())
        <p class="text-gray-500">Belum ada data penulis.</p>
    @else
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="w-full border-collapse bg-white text-sm">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border p-3 text-center">No</th>
                        <th class="border p-3 text-left">Nama</th>
                        <th class="border p-3 text-left">Email</th>
                        <th class="border p-3 text-left">Genre Tulisan</th>
                        <th class="border p-3 text-center">Jumlah Buku</th>
                        <th class="border p-3 text-left">Novel</th>
                        <th class="border p-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($writers as $writer)
                        <tr class="hover:bg-gray-50">
                            <td class="border p-3 text-center">{{ $loop->iteration }}</td>
                            <td class="border p-3">{{ $writer->nama }}</td>
                            <td class="border p-3">{{ $writer->email }}</td>
                            <td class="border p-3">{{ $writer->genre_tulisan }}</td>
                            <td class="border p-3 text-center">{{ $writer->jumlah_buku }}</td>
                            <td class="border p-3">{{ $writer->novel }}</td>

                            <td class="border p-3 text-center whitespace-nowrap">
                                <a href="{{ route('writers.edit', $writer->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('writers.destroy', $writer->id) }}"
                                    method="POST" class="inline"
                                    onsubmit="return confirm('Yakin ingin menghapus data penulis ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection