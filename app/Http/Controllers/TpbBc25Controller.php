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
        // Ambil user yang sedang autentikasi
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not authenticated'
            ], 401);
        }

        // Ambil access_token dari kolom 'access_token' di tabel 'users'
        $accessToken = $user->access_token;

        if (!$accessToken) {
            return response()->json([
                'status' => 'error',
                'message' => 'Access token is required'
            ], 401);
        }


    // Ambil semua data request tanpa filter
    $requestData = $request->all();



        // Debugging: Cek semua data yang akan dikirim ke API dalam format JSON
        // dd($requestData);

        // URL API eksternal
        $apiUrl = 'https://apis-gw.beacukai.go.id/openapi/document';


        try {
            // Kirim permintaan POST ke API eksternal menggunakan Http facade
            $response = Http::withToken($accessToken)
                ->post($apiUrl, $requestData);

            // Debugging: Cek respons dari API
            if ($response->failed()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal menghubungi API eksternal',
                    'details' => [
                        'status_code' => $response->status(),
                        'body' => $response->body()
                    ]
                ], $response->status());
            }

            $data = $response->json();

            // Periksa apakah status respons adalah 'success'
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

