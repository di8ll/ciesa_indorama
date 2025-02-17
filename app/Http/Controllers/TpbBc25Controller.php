<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {

        // Menampilkan hasil request sebelum diproses lebih lanjut
        dd(request()->all()); // Ini akan dump dan die (lihat hasil JSON dari input)

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

        // Buat payload berdasarkan input yang divalidasi
        $payload = $request->all(); // Atau gunakan $request->only(['field1', 'field2']) jika hanya ingin field tertentu

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
