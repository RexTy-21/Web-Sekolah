<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonSiswa;

class CalonSiswaController extends Controller
{
    public function index() {
        return view('ppdb'); // Nampilin halaman form
    }

    public function store(Request $request) {
        $request->validate([
            'nama_lengkap' => 'required',
            'nisn' => 'required|unique:calon_siswas',
            'asal_sekolah' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required'
        ]);

        CalonSiswa::create($request->all());

        return redirect('/ppdb')->with('sukses', 'Mantap! Pendaftaran berhasil dikirim.');
    }
}