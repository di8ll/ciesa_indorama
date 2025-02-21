<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    public function index()
    {
        // Mengambil semua data dokumen
        $dokumen = Dokumen::all();

        // Mengirim data ke view
        return view('dokumen.index', compact('dokumen'));
    }


    public function create(Request $request)
    {
        // Mengambil semua data dokumen
        $dokumen = Dokumen::all();

        // Mengirim data ke view
        return view('dashboard.admin.dokumen.create', compact('dokumen'));
    }


    /**
     * Simpan dokumen baru.
     */
    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
                 'dokumen.0.idDokumen' => 'required|string|max:255',
            'dokumen.0.kodeDokumen' => 'required|string|max:255',
            'dokumen.0.nomorDokumen' => 'required|string|max:255',
            'dokumen.0.tanggalDokumen' => 'required|date',
        ]);

        // Menyimpan data dokumen baru dengan data dari request
        $dokumen = new Dokumen();

        // Mengisi data dokumen
        $dokumen->kodeDokumen = $request->input('dokumen.0.idDokumen');
        $dokumen->kodeDokumen = $request->input('dokumen.0.kodeDokumen');
        $dokumen->nomorDokumen = $request->input('dokumen.0.nomorDokumen');
        $dokumen->tanggalDokumen = $request->input('dokumen.0.tanggalDokumen');

        // Menyimpan dokumen ke database
        $dokumen->save();

        // Redirect ke halaman daftar dokumen dengan pesan sukses
        return redirect()->route('/dokumen/create')->with('success', 'Dokumen berhasil disimpan!');
    }


}

