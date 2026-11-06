<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();

        return view('writers.index', compact('writers'));
    }

    public function create()
    {
        return view('writers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'genre_tulisan' => 'required|string|max:255',
            'jumlah_buku' => 'required|integer|min:0',
            'novel' => 'required|string',
        ]);

        Writer::create($validated);

        return redirect()->route('writers.index')
            ->with('success', 'Data penulis berhasil ditambahkan.');
    }
}