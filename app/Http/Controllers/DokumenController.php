<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Add this import to access the authenticated user
use Illuminate\Support\Str;


class DokumenController extends Controller
{

    public function index(Request $request)
    {

        return view('dokumen.index');
    }

    public function create(Request $request)
    {

      // Generate a unique nomorAju
      $nomorAju = (string) Str::uuid();

      // Pass the generated nomorAju to the view
      return view('dashboard.admin.dokumen.create', compact('nomorAju'));
    }
    public function store(Request $request)
    {

            // // Validasi input untuk jumlahKontainer
            // $validated = $request->validate([
            //     'jumlahKontainer' => 'required|integer|min:0',
            // ]);

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
         $validated = $request->all();


        //  // Convert data string ke integer untuk field tertentu
        //  $fieldsToConvert = [
        //      'jumlahKontainer', 'bruto', 'cif', 'dasarPengenaanPajak',
        //      'hargaPenyerahan', 'ndpbm', 'netto', 'seri', 'volume',
        //      'ppnPajak', 'ppnbmPajak', 'tarifPpnPajak', 'tarifPpnbmPajak'
        //  ];
        //  foreach ($fieldsToConvert as $field) {
        //      if (isset($validated[$field])) {
        //          $validated[$field] = intval($validated[$field]);
        //      }
        //  }

        //  // Tambahkan default value untuk field yang wajib jika hilang
        //  $requiredFields = ['barang', 'dokumen', 'entitas', 'kemasan', 'kontainer', 'pengangkut'];
        //  foreach ($requiredFields as $field) {
        //      if (!isset($validated[$field])) {
        //          $validated[$field] = []; // Default value sebagai array kosong
        //      }
        //  }

         // URL API eksternal
         $apiUrl = 'https://apis-gw.beacukai.go.id/openapi/document';



         try {
            // Kirim permintaan POST ke API eksternal menggunakan Http facade
            $response = Http::withToken($accessToken)->post($apiUrl);

            // Cek respons dari API
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



