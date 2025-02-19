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
        // Validasi input untuk jumlahKontainer
        $validated = $request->validate([
            'jumlahKontainer' => 'required|integer|min:0',
        ]);

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
        // // Ambil semua data request tanpa filter
        $validated = $request->all();

        dd(request()->all());

        // dd($validated); // This will dump the validated data to check what values are coming through.


        // Fields to convert to integer
        $fieldsToConvertInteger = [
            'jumlahKontainer', 'seri', 'bruto2','cif2','cif3','diskon','fob','hargaEkspor','hargaPenyerahan','isiPerKemasan','jumlahKemasan','jumlahKemasan2',
            'jumlahSatuan','jumlahSatuan2','jumlahSatuan3','jumlahSatuan4','jumlahSatuan6','jumlahSatuan7','jumlahSatuan8',
            'netto','nilaiBarang','seriBarang','seriBarang2','seriBarang3','seriBarang4','ndpbm','ndpbm2','ndpbm3','freight','seriKontainer','cifRupiah','cifRupiah2',
            'hargaPerolehan','jumlahSatuan','jumlahSatuan2','jumlahSatuan3','jumlahSatuan4','jumlahSatuan5','jumlahSatuan6','jumlahSatuan7','jumlahSatuan8',
            'seriBahanBaku','seriBahanBaku2','seriBahanBaku3','seriBarangDokAsal','seriIjin','seriIjin2','seriIjin3','nilaiBayar','nilaiBayar2','nilaiBayar3','nilaiBayar4','nilaiBayar5',
            'nilaiFasilitas','nilaiFasilitas3','nilaiFasilitas4','nilaiFasilitas5','nilaiFasilitas','nilaiFasilitas2','nilaiFasilitas3',
            'nilaiFasilitas4','nilaiFasilitas5','tarif','tarif2','tarif3','tarif4','tarif5','nilaiBayar','nilaiBayar3','nilaiBayar5',
            'nilaiSudahDilunasi','nilaiSudahDilunasi2','nilaiSudahDilunasi3','nilaiSudahDilunasi4','nilaiSudahDilunasi5','seriDokumen','seriDokumen2',
            'seriDokumen3','seriDokumen4','seriIjin','seriIjin2','seriIjin3','tarifFasilitas','tarifFasilitas2','tarifFasilitas3','tarifFasilitas4','tarifFasilitas5',
            'seriEntitas','seriEntitas2','seriEntitas3','seriPengangkut','seriKemasan'

        ];

        // Fields to convert to decimal
        $fieldsToConvertDecimal4 = [
            'bruto','cif','hargaPenyerahan','hargaPenyerahan2','hargaPenyerahan3',
            'netto2','volume'
        ];

        // Fields to convert to decimal
        $fieldsToConvertDecimal2 = [
            'dasarPengenaanPajak',  'ppnPajak', 'ppnbmPajak','tarifPpnPajak', 'tarifPpnbmPajak'
        ];

        // Combine both fields for conversion
        $fieldsToConvert = array_merge($fieldsToConvertInteger, $fieldsToConvertDecimal4, $fieldsToConvertDecimal2);

        foreach ($fieldsToConvert as $field) {
            if (isset($validated[$field])) {
                // Convert to integer if the field is in the integer array
                if (in_array($field, $fieldsToConvertInteger)) {
                    $validated[$field] = (int) $validated[$field]; // Convert to integer
                }
                // Convert to decimal if the field is in the decimal array
                if (in_array($field, $fieldsToConvertDecimal4)) {
                    $validated[$field] = round(floatval($validated[$field]), 4); // Convert to decimal and round to 4 decimal places
                }
                if (in_array($field, $fieldsToConvertDecimal2)) {
                    $validated[$field] = round(floatval($validated[$field]), 2); // Convert to decimal and round to 2 decimal places
                }
            }
        }

        $payload = $request->all();

        $apiUrl = 'https://apis-gw.beacukai.go.id/openapi/document';

    try {
        // Kirim permintaan POST ke API eksternal menggunakan Http facade
        $response = Http::withToken($accessToken)->post($apiUrl, $payload);

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
                'data' => $payload
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
