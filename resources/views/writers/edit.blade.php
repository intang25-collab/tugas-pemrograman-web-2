@extends('app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Ubah Data Penulis</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('writers.update', $writer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama"
                value="{{ old('nama', $writer->nama) }}"
                class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email"
                value="{{ old('email', $writer->email) }}"
                class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Genre Tulisan</label>
            <input type="text" name="genre_tulisan"
                value="{{ old('genre_tulisan', $writer->genre_tulisan) }}"
                class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Jumlah Buku</label>
            <input type="number" name="jumlah_buku"
                value="{{ old('jumlah_buku', $writer->jumlah_buku) }}"
                min="0" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Novel</label>
            <textarea name="novel"
                class="w-full border p-2 rounded" required>{{ old('novel', $writer->novel) }}</textarea>
        </div>

        <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">
            Update
        </button>

        <a href="{{ route('writers.index') }}"
            class="bg-gray-500 text-white px-4 py-2 rounded">
            Kembali
        </a>
    </form>
@endsection