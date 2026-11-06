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
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">No</th>
                        <th class="border p-2">Nama</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Genre Tulisan</th>
                        <th class="border p-2">Jumlah Buku</th>
                        <th class="border p-2">novel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($writers as $writer)
                        <tr>
                            <td class="border p-2">{{ $loop->iteration }}</td>
                            <td class="border p-2">{{ $writer->nama }}</td>
                            <td class="border p-2">{{ $writer->email }}</td>
                            <td class="border p-2">{{ $writer->genre_tulisan }}</td>
                            <td class="border p-2">{{ $writer->jumlah_buku }}</td>
                            <td class="border p-2">{{ $writer->novel}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection