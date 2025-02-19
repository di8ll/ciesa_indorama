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

        // Konversi nilaiBarang (Nilai Pabean) ke format angka desimal jika ada
        if (isset($payload['nilaiBarang'])) {
            // Hapus titik sebagai pemisah ribuan dan ubah koma menjadi titik desimal
            $payload['nilaiBarang'] = str_replace(['.', ','], ['', '.'], $payload['nilaiBarang']);

            // Cek apakah nilaiBarang bisa dikonversi ke angka
            if (is_numeric($payload['nilaiBarang'])) {
                // Format angka tanpa pemisah ribuan, dengan dua angka desimal
                $payload['nilaiBarang'] = number_format((float) $payload['nilaiBarang'], 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Nilai Pabean harus berupa angka yang valid'
                ], 400);
            }
        }

        // Konversi tarifPpnPajak ke format desimal jika ada
        if (isset($payload['tarifPpnPajak'])) {
            // Hapus persen (%) dan ubah ke format desimal
            $payload['tarifPpnPajak'] = str_replace('%', '', $payload['tarifPpnPajak']);

            // Cek apakah tarifPpnPajak bisa dikonversi ke angka
            if (is_numeric($payload['tarifPpnPajak'])) {
                // Ubah ke format desimal (misalnya 11.00 menjadi 0.11)
                $payload['tarifPpnPajak'] = number_format(((float) $payload['tarifPpnPajak'] / 100), 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Tarif PPN harus berupa angka yang valid'
                ], 400);
            }
        }


        if (isset($payload['ppnPajak'])) {
            $payload['ppnPajak'] = str_replace(['.', ','], ['', '.'], $payload['ppnPajak']);

            if (is_numeric($payload['ppnPajak'])) {
                $payload['ppnPajak'] = number_format((float) $payload['ppnPajak'], 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'PPN harus berupa angka yang valid'
                ], 400);
            }
        }


                // Konversi tarifPpnPajak ke format desimal jika ada
                if (isset($payload['tarifPpnbmPajak'])) {
                    // Hapus persen (%) dan ubah ke format desimal
                    $payload['tarifPpnbmPajak'] = str_replace('%', '', $payload['tarifPpnbmPajak']);

                    // Cek apakah tarifPpnbmPajak bisa dikonversi ke angka
                    if (is_numeric($payload['tarifPpnbmPajak'])) {
                        // Ubah ke format desimal (misalnya 11.00 menjadi 0.11)
                        $payload['tarifPpnbmPajak'] = number_format(((float) $payload['tarifPpnbmPajak'] / 100), 2, '.', '');
                    } else {
                        return response()->json([
                            'status' => 'error',
                            'message' => 'Tarif PPN harus berupa angka yang valid'
                        ], 400);
                    }
                }


        if (isset($payload['ppnbmPajak'])) {
            $payload['ppnbmPajak'] = str_replace(['.', ','], ['', '.'], $payload['ppnbmPajak']);

            if (is_numeric($payload['ppnbmPajak'])) {
                $payload['ppnbmPajak'] = number_format((float) $payload['ppnbmPajak'], 2, '.', '');
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'PPN harus berupa angka yang valid'
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
