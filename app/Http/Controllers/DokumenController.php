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
            'dokumen.0.kodeDokumen' => 'required|string|max:255',
            'dokumen.0.nomorDokumen' => 'required|string|max:255',
            'dokumen.0.tanggalDokumen' => 'required|date',
        ]);

        // Simpan data baru
        Dokumen::create([
            'kodeDokumen' => $request->input('dokumen.0.kodeDokumen'),
            'nomorDokumen' => $request->input('dokumen.0.nomorDokumen'),
            'tanggalDokumen' => $request->input('dokumen.0.tanggalDokumen'),
        ]);

        return redirect()->route('/dokumen/create')->with('success', 'Dokumen berhasil disimpan!');
    }

    public function destroy($idDokumen)
    {
        // Cari dokumen berdasarkan ID
        $dokumen = Dokumen::findOrFail($idDokumen);

        // Hapus dokumen
        $dokumen->delete();

        // Redirect ke halaman dokumen dengan pesan sukses
        return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil dihapus!');
    }
}

