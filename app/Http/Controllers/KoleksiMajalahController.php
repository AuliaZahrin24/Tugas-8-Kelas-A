<?php

namespace App\Http\Controllers;

use App\Models\KoleksiMajalah;
use Illuminate\Http\Request;

class KoleksiMajalahController extends Controller
{
    public function index() {
        $majalah = KoleksiMajalah::all();
        return view('majalah.index', compact('majalah'));
    }

    public function create() {
        return view('majalah.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'edisi' => 'required',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required|date',
        ]);

        KoleksiMajalah::create($request->all());
        return redirect()->route('majalah.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show(KoleksiMajalah $majalah) {
        return view('majalah.show', compact('majalah'));
    }

    public function edit(KoleksiMajalah $majalah) {
        return view('majalah.edit', compact('majalah'));
    }

    public function update(Request $request, KoleksiMajalah $majalah) {
        $request->validate([
            'judul' => 'required',
            'edisi' => 'required',
            'penerbit' => 'required',
            'tanggal_terbit' => 'required|date',
        ]);

        $majalah->update($request->all());
        return redirect()->route('majalah.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(KoleksiMajalah $majalah) {
        $majalah->delete();
        return redirect()->route('majalah.index')->with('success', 'Data berhasil dihapus!');
    }
}