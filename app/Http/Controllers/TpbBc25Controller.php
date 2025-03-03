<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataPemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add this import
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Add this import to access the authenticated user
use App\Models\DataPenerimaPajak;
use App\Models\ReferensiDokumen;
use App\Models\ReferensiJenisKemasan;
use App\Models\Referensivaluta;
use App\Models\ReferensiHSCode;
use App\Models\ReferensiKategoriBarang;

class TpbBc25Controller extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.admin.dokumen.index');
    }

    public function create(Request $request)
    {
        $penerimaPajak = DataPenerimaPajak::all();
        $pemilikbarang = DataPemilik::all();
        $referensidokumen = ReferensiDokumen::all();
        $referensikemasan = ReferensiJenisKemasan::all();
        $referensivaluta = Referensivaluta::all();
        $referensiHSCODE = ReferensiHSCode::all();
        $referensikategoribarang = ReferensiKategoriBarang::all();
        
        $defaultValuta = Referensivaluta::where('kode_valuta', 'USD')->first();

        return view('dashboard.admin.dokumen.create', compact('penerimaPajak','pemilikbarang','referensidokumen','referensikemasan','referensivaluta','defaultValuta','referensiHSCODE','referensikategoribarang'));
    }

    public function store(Request $request)
    {
        dd(request()->all());

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

        // // Ambil semua data request tanpa filter
        $payload = $request->all();

            // **Pastikan field wajib ada (default nilai kosong jika tidak ada)**
    $payload['barang'][0]['bahanBaku'] = $payload['barang'][0]['bahanBaku'] ?? [];
    $payload['barang'][0]['barangDokumen'] = $payload['barang'][0]['barangDokumen'] ?? [];
    $payload['barang'][0]['barangTarif'] = $payload['barang'][0]['barangTarif'] ?? [];



        // dd($validated); // This will dump the validated data to check what values are coming through.


        if (isset($payload['barang'][0]['bruto'])) {
            $payload['barang'][0]['bruto'] = floatval($payload['barang'][0]['bruto']);
        }

        if (isset($payload['barang'][0]['cif'])) {
            $payload['barang'][0]['cif'] = floatval($payload['barang'][0]['cif']);
        }

        if (isset($payload['barang'][0]['diskon'])) {
            $payload['barang'][0]['diskon'] = floatval($payload['barang'][0]['diskon']);
        }

        if (isset($payload['barang'][0]['fob'])) {
            $payload['barang'][0]['fob'] = floatval($payload['barang'][0]['fob']);
        }

        if (isset($payload['barang'][0]['freight'])) {
            $payload['barang'][0]['freight'] = floatval($payload['barang'][0]['freight']);
        }

        if (isset($payload['barang'][0]['hargaEkspor'])) {
            $payload['barang'][0]['hargaEkspor'] = floatval($payload['barang'][0]['hargaEkspor']);
        }

        if (isset($payload['barang'][0]['hargaPenyerahan'])) {
            $payload['barang'][0]['hargaPenyerahan'] = floatval($payload['barang'][0]['hargaPenyerahan']);
        }

        if (isset($payload['barang'][0]['isiPerKemasan'])) {
            $payload['barang'][0]['isiPerKemasan'] = floatval($payload['barang'][0]['isiPerKemasan']);
        }

        if (isset($payload['barang'][0]['jumlahKemasan'])) {
            $payload['barang'][0]['jumlahKemasan'] = floatval($payload['barang'][0]['jumlahKemasan']);
        }

        if (isset($payload['barang'][0]['jumlahSatuan'])) {
            $payload['barang'][0]['jumlahSatuan'] = floatval($payload['barang'][0]['jumlahSatuan']);
        }

        if (isset($payload['barang'][0]['netto'])) {
            $payload['barang'][0]['netto'] = floatval($payload['barang'][0]['netto']);
        }

        if (isset($payload['barang'][0]['nilaiBarang'])) {
            $payload['barang'][0]['nilaiBarang'] = floatval($payload['barang'][0]['nilaiBarang']);
        }

        if (isset($payload['barang'][0]['seriBarang'])) {
            $payload['barang'][0]['seriBarang'] = floatval($payload['barang'][0]['seriBarang']);
        }

        if (isset($payload['barang'][0]['ndpbm'])) {
            $payload['barang'][0]['ndpbm'] = floatval($payload['barang'][0]['ndpbm']);
        }

        if (isset($payload['barang'][0]['cifRupiah'])) {
            $payload['barang'][0]['cifRupiah'] = floatval($payload['barang'][0]['cifRupiah']);
        }

        if (isset($payload['barang'][0]['ndpbm'])) {
            $payload['barang'][0]['ndpbm'] = floatval($payload['barang'][0]['ndpbm']);
        }

        if (isset($payload['barang'][0]['cifRupiah'])) {
            $payload['barang'][0]['cifRupiah'] = floatval($payload['barang'][0]['cifRupiah']);
        }

        if (isset($payload['barang'][0]['hargaPerolehan'])) {
            $payload['barang'][0]['hargaPerolehan'] = floatval($payload['barang'][0]['hargaPerolehan']);
        }


        if (isset($payload['entitas'][0]['seriEntitas'])) {
            $payload['entitas'][0]['seriEntitas'] = floatval($payload['entitas'][0]['seriEntitas']);
        }

        if (isset($payload['entitas'][1]['seriEntitas'])) {
            $payload['entitas'][1]['seriEntitas'] = floatval($payload['entitas'][1]['seriEntitas']);
        }

        if (isset($payload['entitas'][2]['seriEntitas'])) {
            $payload['entitas'][2]['seriEntitas'] = floatval($payload['entitas'][2]['seriEntitas']);
        }
        if (isset($payload['kemasan'][0]['seriKemasan'])) {
            $payload['kemasan'][0]['seriKemasan'] = floatval($payload['kemasan'][0]['seriKemasan']);
        }
        if (isset($payload['kemasan'][0]['jumlahKemasan'])) {
            $payload['kemasan'][0]['jumlahKemasan'] = floatval($payload['kemasan'][0]['jumlahKemasan']);
        }

        if (isset($payload['kontainer'][0]['seriKontainer'])) {
            $payload['kontainer'][0]['seriKontainer'] = floatval($payload['kontainer'][0]['seriKontainer']);
        }

        if (isset($payload['dokumen'][0]['seriDokumen'])) {
            $payload['dokumen'][0]['seriDokumen'] = floatval($payload['dokumen'][0]['seriDokumen']);
        }

        if (isset($payload['dokumen'][1]['seriDokumen'])) {
            $payload['dokumen'][1]['seriDokumen'] = floatval($payload['dokumen'][1]['seriDokumen']);
        }


        if (isset($payload['pengangkut'][0]['seriPengangkut'])) {
            $payload['pengangkut'][0]['seriPengangkut'] = floatval($payload['pengangkut'][0]['seriPengangkut']);
        }
        // Cast 'bruto' and 'bruto2' to float before sending to external API
        $payload['bruto'] = floatval($payload['bruto']);


        $payload['cif'] = floatval($payload['cif']);


        $payload['dasarPengenaanPajak'] = floatval($payload['dasarPengenaanPajak']);


        $payload['tarifPpnPajak'] = floatval($payload['tarifPpnPajak']);

        $payload['tarifPpnbmPajak'] = floatval($payload['tarifPpnbmPajak']);

        $payload['ppnPajak'] = floatval($payload['ppnPajak']);

        $payload['ppnbmPajak'] = floatval($payload['ppnbmPajak']);

        $payload['volume'] = floatval($payload['volume']);

        $payload['seri'] = floatval($payload['seri']);

        $payload['netto'] = floatval($payload['netto']);


        $payload['hargaPenyerahan'] = floatval($payload['hargaPenyerahan']);


        $payload['ndpbm'] = floatval($payload['ndpbm']);


        $payload['jumlahKontainer'] = floatval($payload['jumlahKontainer']);
        // Ensure this is inside the correct context, for example within an array or a function
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
