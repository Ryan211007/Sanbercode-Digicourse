<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    // Menampilkan daftar semua pemain film
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    // Menampilkan form untuk membuat data pemain film baru
    public function create()
    {
        return view('cast.create');
    }

    // Menyimpan data baru ke tabel Cast
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'age' => 'required|integer|min:0',
            'bio' => 'nullable|string',
        ]);

        Cast::create($request->all());

        return redirect()->route('cast.index')->with('success', 'Data pemain film berhasil ditambahkan.');
    }

    // Menampilkan detail data pemain film dengan id tertentu
    public function show($id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.show', compact('cast'));
    }

    // Menampilkan form untuk edit pemain film dengan id tertentu
    public function edit($id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.edit', compact('cast'));
    }

    // Menyimpan perubahan data pemain film (update) untuk id tertentu
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'age' => 'required|integer|min:0',
            'bio' => 'nullable|string',
        ]);

        $cast = Cast::findOrFail($id);
        $cast->update($request->all());

        return redirect()->route('cast.index')->with('success', 'Data pemain film berhasil diperbarui.');
    }

    // Menghapus data pemain film dengan id tertentu
    public function destroy($id)
    {
        $cast = Cast::findOrFail($id);
        $cast->delete();

        return redirect()->route('cast.index')->with('success', 'Data pemain film berhasil dihapus.');
    }
}