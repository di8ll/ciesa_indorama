<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Add this import

class DokumenController extends Controller
{

    public function index(Request $request)
    {

        return view('dokumen.index');
    }

    public function create(Request $request)
    {

        return view('dokumen.index');
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Validasi input
            $validator = Validator::make($request->all(), [
                'entitas' => ['required', 'string', 'max:255'],
                'jenis_dokumen' => ['required', 'string', 'max:255'],
            ]);

            // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan pesan error
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            // Buat dokumen baru
            $dokumenBaru = new Dokumen();
            $dokumenBaru->entitas = $request->entitas;
            $dokumenBaru->jenis_dokumen = $request->jenis_dokumen;

            // Generate nomor pengajuan secara otomatis
            $dokumenBaru->nomor_pengajuan = Dokumen::generateNomorDokumen();

            // Simpan data dokumen ke database
            $dokumenBaru->save();

            // Komit transaksi
            DB::commit();

            // Redirect ke halaman yang diinginkan dengan pesan sukses
            return redirect('/dokumen')->with('success', 'Dokumen berhasil dibuat.');
        } catch (\Throwable $th) {
            // Rollback jika terjadi kesalahan
            DB::rollBack();

            // Log error (opsional, untuk debugging)
            Log::error('Kesalahan saat membuat dokumen: ' . $th->getMessage());

            // Redirect kembali dengan pesan error
            return back()->with(['error' => 'Pembuatan dokumen gagal.']);
        }
    }


}
