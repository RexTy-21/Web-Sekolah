<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonSiswa;
use App\Models\Galeri;

class AdminController extends Controller
{
    public function index()
    {
        $pendaftar = CalonSiswa::orderBy('created_at', 'desc')->get();
        $galeri = Galeri::orderBy('created_at', 'desc')->get();
        
        return view('admin.dashboard', compact('pendaftar', 'galeri'));
    }

    // Tambahkan fungsi ini di dalam AdminController
    public function storeGaleri(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('foto');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/galeri'), $namaFile);

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => 'images/galeri/' . $namaFile
        ]);

        return redirect('/admin/dashboard')->with('sukses_galeri', 'Foto galeri berhasil ditambahkan!');
    }

    public function destroyPendaftar($id)
    {
        CalonSiswa::findOrFail($id)->delete();
        return redirect('/admin/dashboard')->with('sukses', 'Data pendaftar berhasil dihapus.');
    }

    public function destroyGaleri($id)
    {
        $galeri = Galeri::findOrFail($id);
        
        if (file_exists(public_path($galeri->foto))) {
            unlink(public_path($galeri->foto));
        }

        $galeri->delete();
        return redirect('/admin/dashboard')->with('sukses_galeri', 'Foto galeri berhasil dihapus.');
    }
}