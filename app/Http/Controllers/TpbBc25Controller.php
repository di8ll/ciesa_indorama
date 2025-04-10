<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataPemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth; // Add this import to access the authenticated user
use App\Models\DataPenerimaPajak;
use App\Models\ReferensiDokumen;
use App\Models\ReferensiJenisKemasan;
use App\Models\Referensivaluta;
use App\Models\ReferensiHSCode;
use App\Models\ReferensiKantor;
use App\Models\ReferensiKategoriBarang;
use App\Models\DataHeader;
use Illuminate\Support\Facades\DB;
use App\Models\DataEntitasPenyelenggara;
use App\Models\DataEntitasPemilikBarang;

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
        $referensikantor = ReferensiKantor::all();

        $defaultValuta = Referensivaluta::where('kode_valuta', 'USD')->first();

        return view('dashboard.admin.dokumen.create', compact('penerimaPajak', 'pemilikbarang', 'referensidokumen', 'referensikemasan', 'referensivaluta', 'defaultValuta', 'referensiHSCODE', 'referensikategoribarang', 'referensikantor'));
    }

    public function store(Request $request)
    {
        // dd(request()->all());

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

        // Ensure the 'barang' field exists and set defaults for missing values
        $payload['barang'][0]['kodeDokAsal'] = $payload['barang'][0]['kodeDokAsal'] ?? '';
        // $payload['barang'][0]['bahanBaku'] = $payload['barang'][0]['bahanBaku'] ?? [];
        $payload['barang'][0]['barangDokumen'] = $payload['barang'][0]['barangDokumen'] ?? [];
        $payload['barang'][0]['barangTarif'] = $payload['barang'][0]['barangTarif'] ?? [];

        $payload['barang'][0]['bahanBakuTarif'] = $payload['barang'][0]['bahanBakuTarif'] ?? [];
        $payload['kontainer'] = $payload['kontainer'] ?? [];

        // Anda bisa menambahkan validasi lain di sini jika diperlukan, misalnya validasi lainnya

        // bahan baku Tarif
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarif'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarif'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarif']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarifFasilitas'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarifFasilitas'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['tarifFasilitas']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['jumlahSatuan'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['jumlahSatuan'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['jumlahSatuan']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiBayar']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiFasilitas'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiFasilitas'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiFasilitas']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiSudahDilunasi'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiSudahDilunasi'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['nilaiSudahDilunasi']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['seriBahanBaku'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif'][0]['seriBahanBaku'] = floatval($payload['barang'][0]['bahanBaku'][0]['bahanBakuTarif']  [0]['seriBahanBaku']);
        }

        // bahan baku
        if (isset($payload['barang'][0]['bahanBaku'][0]['cif'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['cif'] = floatval($payload['barang'][0]['bahanBaku'][0]['cif']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['cifRupiah'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['cifRupiah'] = floatval($payload['barang'][0]['bahanBaku'][0]['cifRupiah']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['hargaPenyerahan'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['hargaPenyerahan'] = floatval($payload['barang'][0]['bahanBaku'][0]['hargaPenyerahan']);
        }

        if (isset($payload['barang'][0]['bahanBaku'][0]['ndpbm'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['ndpbm'] = floatval($payload['barang'][0]['bahanBaku'][0]['ndpbm']);
        }

        if (isset($payload['barang'][0]['bahanBaku'][0]['seriBahanBaku'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['seriBahanBaku'] = floatval($payload['barang'][0]['bahanBaku'][0]['seriBahanBaku']);
        }

        if (isset($payload['barang'][0]['bahanBaku'][0]['seriBarangDokAsal'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['seriBarangDokAsal'] = floatval($payload['barang'][0]['bahanBaku'][0]['seriBarangDokAsal']);
        }

        if (isset($payload['barang'][0]['bahanBaku'][0]['seriBarang'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['seriBarang'] = floatval($payload['barang'][0]['bahanBaku'][0]['seriBarang']);
        }

        if (isset($payload['barang'][0]['bahanBaku'][0]['seriIjin'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['seriIjin'] = floatval($payload['barang'][0]['bahanBaku'][0]['seriIjin']);
        }
        if (isset($payload['barang'][0]['bahanBaku'][0]['jumlahSatuan'])) {
            // If 'cif' exists, convert it to a float
            $payload['barang'][0]['bahanBaku'][0]['jumlahSatuan'] = floatval($payload['barang'][0]['bahanBaku'][0]['jumlahSatuan']);
        }


        // barang
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
            // Start transaction
            DB::beginTransaction();

            // Save data to data_header table
            $dataHeader = new DataHeader();
            $dataHeader->fill($payload);
            $dataHeader->save();

            // Get entitas[1] data from the request
            $entitasData = $request->input('entitas')[1]; // Get data from entitas[1]

            // Create DataEntitasPemilikBarang instance
            $dataPemilik = new DataEntitasPemilikBarang();
            $dataPemilik->fill($entitasData);

            // Save data to database
            $dataPemilik->save();

            // Commit the transaction if both saves are successful
            DB::commit();

            // Proceed with the external API request
            $apiUrl = 'https://apis-gw.beacukai.go.id/openapi/document';
            $response = Http::withToken($accessToken)->post($apiUrl, $payload);

            // Check if the API request failed
            if ($response->failed()) {
                // If failed, handle the failure but continue redirecting to /dokumen_baru
                return redirect('/dokumen_baru')->with('error', 'Failed to contact external API');
            }

            // If API response is successful
            $data = $response->json();

            // Check if the API response status is 'success'
            if ($response->successful() && $data['status'] === 'success') {
                // Redirect to /dokumen_baru if data is successfully saved and API returns success
                return redirect('/dokumen_baru')->with('success', 'Data berhasil Dibuat');
            } else {
                // If the API returns an error status, still redirect but show an error message
                return redirect('/dokumen_baru')->with('error', $data['message'] ?? 'Failed to save data');
            }

        } catch (\Exception $e) {
            // In case of exception, redirect to /dokumen_baru with error message
            return redirect('/dokumen_baru')->with('error', 'An error occurred while saving data or making the request');
        }

    }
}
