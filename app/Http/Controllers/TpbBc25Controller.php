<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add this import
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Add this import to access the authenticated user
use App\Models\User;

class TpbBc25Controller extends Controller

{
    public function index(Request $request)
    {

        return view('dashboard.admin.dokumen.index');
    }

    public function create(Request $request)
    {
        return view('dashboard.admin.dokumen.create');
    }

    // public function storeDokumen(Request $request)
    // {


    //     // Validate incoming request
    //     $request->validate([
    //         'kodeDokumen' => 'required|string',
    //         'nomorDokumen' => 'required|string',
    //         'tanggalDokumen' => 'required|date',
    //     ]);

    //     // Create a new document record
    //     $dokumen = new Dokumen();
    //     $dokumen->kodeDokumen = $request->input('kodeDokumen');
    //     $dokumen->nomorDokumen = $request->input('nomorDokumen');
    //     $dokumen->tanggalDokumen = $request->input('tanggalDokumen');
    //     $dokumen->user_id = Auth::id(); // Assuming the authenticated user is storing this information

    //     try {
    //         // Save the document
    //         $dokumen->save();

    //         return redirect()->route('dokumen.index')->with('success', 'Dokumen berhasil disimpan');
    //     } catch (\Exception $e) {
    //         return redirect()->route('dokumen.index')->with('error', 'Terjadi kesalahan saat menyimpan dokumen: ' . $e->getMessage());
    //     }
    // }

    public function store(Request $request)
    {
        // Menampilkan hasil request sebelum diproses lebih lanjut (debugging)
        // dd($request->all()); // Bisa diaktifkan untuk cek input JSON

        // Ambil user yang sedang autentikasi
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not authenticated'
            ], 401);
        }

        // Ambil access_token dari tabel users
        $accessToken = $user->access_token;
        if (!$accessToken) {
            return response()->json([
                'status' => 'error',
                'message' => 'Access token is required'
            ], 401);
        }

        // Ambil semua input dari request
        $payload = $request->all();

        // Konversi CIF ke format angka (BigDecimal) jika ada
        if (isset($payload['cif'])) {
            // Hapus koma sebagai pemisah ribuan dan pastikan hanya angka dan titik desimal yang ada
            $payload['cif'] = str_replace(',', '', $payload['cif']);

            // Cek apakah CIF bisa dikonversi ke angka
            if (is_numeric($payload['cif'])) {
                // Format angka tanpa pemisah ribuan, dengan dua angka desimal
                $payload['cif'] = number_format((float) $payload['cif'], 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'CIF harus berupa angka yang valid'
                ], 400);
            }
        }

        // Konversi hargaPenyerahan ke format yang benar jika ada
        if (isset($payload['hargaPenyerahan'])) {
            // Hapus koma sebagai pemisah ribuan dan pastikan hanya angka dan titik desimal yang ada
            $payload['hargaPenyerahan'] = str_replace(',', '', $payload['hargaPenyerahan']);

            // Cek apakah hargaPenyerahan bisa dikonversi ke angka
            if (is_numeric($payload['hargaPenyerahan'])) {
                // Format angka tanpa pemisah ribuan, dengan dua angka desimal
                $payload['hargaPenyerahan'] = number_format((float) $payload['hargaPenyerahan'], 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Harga Penyerahan harus berupa angka yang valid'
                ], 400);
            }
        }

                // Konversi ppnPajak jika ada
        if (isset($payload['ppnPajak'])) {
            // Hapus tanda persen dan pastikan hanya angka yang ada
            $ppnPajak = str_replace('%', '', $payload['ppnPajak']);

            // Cek apakah ppnPajak bisa dikonversi ke angka
            if (is_numeric($ppnPajak)) {
                // Format ppnPajak menjadi angka desimal (tanpa persen)
                $payload['ppnPajak'] = number_format((float) $ppnPajak, 4, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'PPN Pajak harus berupa angka yang valid'
                ], 400);
            }
        }


        // Konversi tarifPpnPajak jika ada
        if (isset($payload['tarifPpnPajak'])) {
            // Hapus tanda persen dan pastikan hanya angka yang ada
            $tarifPpnPajak = str_replace('%', '', $payload['tarifPpnPajak']);

            // Cek apakah tarifPpnPajak bisa dikonversi ke angka
            if (is_numeric($tarifPpnPajak)) {
                // Format tarifPpnPajak menjadi angka desimal (tanpa persen)
                $payload['tarifPpnPajak'] = number_format((float) $tarifPpnPajak, 4, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Tarif PPN Pajak harus berupa angka yang valid'
                ], 400);
            }
        }

        $apiUrl = 'https://apis-gw.beacukai.go.id/openapi/document';

        try {
            // Kirim data ke API eksternal
            $response = Http::withToken($accessToken)->post($apiUrl, $payload);

            // Periksa apakah request ke API gagal
            if ($response->failed()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal menghubungi API eksternal',
                    'details' => [
                        'status_code' => $response->status(),
                        'body' => $response->json()
                    ]
                ], $response->status());
            }

            $data = $response->json();

            // Periksa apakah response dari API sukses
            if (isset($data['status']) && $data['status'] === 'success') {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data berhasil dikirim',
                    'data' => $data
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => $data['message'] ?? 'Gagal menyimpan data'
            ], 400);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengirim permintaan',
                'details' => $e->getMessage()
            ], 500);
        }
    }



}
