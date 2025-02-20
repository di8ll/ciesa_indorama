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

        // // Ambil semua data request tanpa filter
        $validated = $request->all();

        // dd(request()->all());

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
        $payload = [
            'asalData' => $validated['asalData'] ?? null,
            'bruto' => $validated['bruto'] ?? null,
            'cif' => $validated['cif'] ?? null,
            'dasarPengenaanPajak' => $validated['dasarPengenaanPajak'] ?? null,
            'disclaimer' => $validated['disclaimer'] ?? null,
            'kodeJenisTpb' => $validated['kodeJenisTpb'] ?? null,
            'hargaPenyerahan' => $validated['hargaPenyerahan'] ?? null,
            'idPengguna' => $validated['idPengguna'] ?? null,
            'jabatanTtd' => $validated['jabatanTtd'] ?? null,
            'jumlahKontainer' => $validated['jumlahKontainer'] ?? null,
            'kodeCaraBayar' => $validated['kodeCaraBayar'] ?? null,
            'kodeDokumen' => $validated['kodeDokumen'] ?? null,
            'kodeKantor' => $validated['kodeKantor'] ?? null,
            'kodeLokasiBayar' => $validated['kodeLokasiBayar'] ?? null,
            'kodeTujuanPengiriman' => $validated['kodeTujuanPengiriman'] ?? null,
            'kodeValuta' => $validated['kodeValuta'] ?? null,
            'kotaTtd' => $validated['kotaTtd'] ?? null,
            'namaTtd' => $validated['namaTtd'] ?? null,
            'ndpbm' => $validated['ndpbm'] ?? null,
            'netto' => $validated['netto'] ?? null,
            'nomorAju' => $validated['nomorAju'] ?? null,
            'seri' => $validated['seri'] ?? null,
            'tanggalAju' => $validated['tanggalAju'] ?? null,
            'tanggalTtd' => $validated['tanggalTtd'] ?? null,
            'volume' => $validated['volume'] ?? null,
            'ppnPajak' => $validated['ppnPajak'] ?? null,
            'ppnbmPajak' => $validated['ppnbmPajak'] ?? null,
            'tarifPpnPajak' => $validated['tarifPpnPajak'] ?? null,
            'tarifPpnbmPajak' => $validated['tarifPpnbmPajak'] ?? null,
            'barang' => array_map(function ($barang) {
                return [
                    "bruto" => $barang["bruto"] ?? null,
                    "cif" => $barang["cif2"] ?? null,
                    "diskon" => $barang["diskon"] ?? null,
                    "fob" => $barang["fob"] ?? null,
                    "freight" => $barang["freight"] ?? null,
                    "hargaEkspor" => $barang["hargaEkspor"] ?? null,
                    "hargaPenyerahan" => $barang["hargaPenyerahan"] ?? null,
                    "isiPerKemasan" => $barang["isiPerKemasan"] ?? null,
                    "jumlahKemasan" => $barang["jumlahKemasan"] ?? null,
                    "jumlahSatuan" => $barang["jumlahSatuan"] ?? null,
                    "kodeBarang" => $barang["kodeBarang"] ?? null,
                    "kodeGunaBarang" => $barang["kodeGunaBarang"] ?? null,
                    "kodeKategoriBarang" => $barang["kodeKategoriBarang"] ?? null,
                    "kodeJenisKemasan" => $barang["kodeJenisKemasan"] ?? null,
                    "kodeKondisiBarang" => $barang["kodeKondisiBarang"] ?? null,
                    "kodePerhitungan" => $barang["kodePerhitungan"] ?? null,
                    "kodeSatuanBarang" => $barang["kodeSatuanBarang"] ?? null,
                    "merk" => $barang["merk"] ?? null,
                    "netto" => $barang["netto"] ?? null,
                    "nilaiBarang" => $barang["nilaiBarang"] ?? null,
                    "posTarif" => $barang["posTarif"] ?? null,
                    "seriBarang" => $barang["seriBarang"] ?? null,
                    "spesifikasiLain" => $barang["spesifikasiLain"] ?? null,
                    "tipe" => $barang["tipe"] ?? null,
                    "ukuran" => $barang["ukuran"] ?? null,
                    "uraian" => $barang["uraian"] ?? null,
                    "bahanBaku" => $barang['bahanBaku'] ?? [],
                    "barangDokumen" => $barang["barangDokumen"] ?? [],
                    "barangTarif" => $barang["barangTarif"] ?? []
                ];
            }, $validated['barang'] ?? []),
            'bahanBaku' => array_map(function ($bahanBaku) {
                return [
                    "kodeBahanBaku" => $bahanBaku["kodeBahanBaku"] ?? null,
                    "jumlah" => $bahanBaku["jumlah"] ?? null,
                    "cif" => $bahanBaku["cif3"] ?? null,
                    "cifRupiah" => $bahanBaku["cifRupiah2"] ?? null,
                    "hargaPenyerahan" => $bahanBaku["hargaPenyerahan3"] ?? null,
                    "jumlahSatuan" => $bahanBaku["jumlahSatuan2"] ?? null,
                    "kodeAsalBahanBaku" => $bahanBaku["kodeAsalBahanBaku"] ?? null,
                    "kodeBarang" => $bahanBaku["kodeBarang2"] ?? null,
                    "kodeDokAsal" => $bahanBaku["kodeDokAsal2"] ?? null,
                    "kodeKantor" => $bahanBaku["kodeKantor2"] ?? null,
                    "kodeSatuanBarang" => $bahanBaku["kodeSatuanBarang2"] ?? null,
                    "merkBarang" => $bahanBaku["merkBarang"] ?? null,
                    "ndpbm" => $bahanBaku["ndpbm3"] ?? null,
                    "nomorAjuDokAsal" => $bahanBaku["nomorAjuDokAsal"] ?? null,
                    "nomorDaftarDokAsal" => $bahanBaku["nomorDaftarDokAsal"] ?? null,
                    "posTarif" => $bahanBaku["posTarif2"] ?? null,
                    "seriBahanBaku" => $bahanBaku["seriBahanBaku"] ?? null,
                    "seriBarang2" => $bahanBaku["seriBarang2"] ?? null,
                    "seriBarangDokAsal" => $bahanBaku["seriBarangDokAsal"] ?? null,
                    "seriIjin" => $bahanBaku["seriIjin"] ?? null,
                    "spesifikasiLainBarang" => $bahanBaku["spesifikasiLainBarang"] ?? null,
                    "tanggalDaftarDokAsal" => $bahanBaku["tanggalDaftarDokAsal"] ?? null,
                    "tipeBarang" => $bahanBaku["tipeBarang"] ?? null,
                ];
            }, $validated['bahanBaku'] ?? []),
            'bahanBakuTarif' => array_map(function ($bahanBakuTarif) {
                return [
                    "kodeJenisTarif" => $bahanBakuTarif["kodeJenisTarif"] ?? null,
                    "jumlahSatuan" => $bahanBakuTarif["jumlahSatuan3"] ?? null,
                    "kodeFasilitasTarif" => $bahanBakuTarif["kodeFasilitasTarif"] ?? null,
                    "kodeJenisPungutan" => $bahanBakuTarif["kodeJenisPungutan"] ?? null,
                    "nilaiBayar" => $bahanBakuTarif["nilaiBayar"] ?? null,
                    "nilaiFasilitas" => $bahanBakuTarif["nilaiFasilitas"] ?? null,
                    "nilaiSudahDilunasi" => $bahanBakuTarif["nilaiSudahDilunasi"] ?? null,
                    "seriBahanBaku" => $bahanBakuTarif["seriBahanBaku2"] ?? null,
                    "tarif" => $bahanBakuTarif["tarif"] ?? null,
                    "tarifFasilitas" => $bahanBakuTarif["tarifFasilitas"] ?? null,
                    "ukuranBarang" => $validated["ukuranBarang"] ?? null,
                    "uraianBarang" => $validated["uraianBarang"] ?? null,
                ];

            }, $validated['bahanBakuTarif'] ?? []),
            'barangDokumen' => array_map(function ($barangDokumen) {
                return [
                    "seriDokumen" => $barangDokumen["seriDokumen"] ?? null,
                    "seriIjin" => $barangDokumen["seriIjin2"] ?? null,
                ];
            }, $validated['barangDokumen'] ?? []),
            'barangTarif' => array_map(function ($barangTarif)  {
                return [
                    "seriBarang" => $barangTarif['seriBarang3'] ?? null,
                    "kodeJenisTarif" => $barangTarif['kodeJenisTarif2'] ?? null,
                    "jumlahSatuan" => $barangTarif['jumlahSatuan4'] ?? null,
                    "kodeFasilitasTarif" => $barangTarif['kodeFasilitasTarif2'] ?? null,
                    "kodeSatuanBarang" => $barangTarif['kodeSatuanBarang3'] ?? null,
                    "kodeJenisPungutan" => $barangTarif['kodeJenisPungutan2'] ?? null,
                    "nilaiBayar" => $barangTarif['nilaiBayar2'] ?? null,
                    "nilaiFasilitas" => $barangTarif['nilaiFasilitas2'] ?? null,
                    "nilaiSudahDilunasi" => $barangTarif['nilaiSudahDilunasi2'] ?? null,
                    "tarif" => $barangTarif['tarif2'] ?? null,
                    "tarifFasilitas" => $barangTarif['tarifFasilitas2'] ?? null,
                    // Menambahkan array kedua sebagai elemen array pertama
                    [
                        "seriBarang" => $barangTarif['seriBarang4'] ?? null,
                        "kodeJenisTarif" => $barangTarif['kodeJenisTarif3'] ?? null,
                        "jumlahSatuan" => $barangTarif['jumlahSatuan5'] ?? null,
                        "kodeFasilitasTarif" => $barangTarif['kodeFasilitasTarif3'] ?? null,
                        "kodeSatuanBarang" => $barangTarif['kodeSatuanBarang4'] ?? null,
                        "kodeJenisPungutan" => $barangTarif['kodeJenisPungutan3'] ?? null,
                        "nilaiBayar" => $barangTarif['nilaiBayar3'] ?? null,
                        "nilaiFasilitas" => $barangTarif['nilaiFasilitas3'] ?? null,
                        "nilaiSudahDilunasi" => $barangTarif['nilaiSudahDilunasi3'] ?? null,
                        "tarif" => $barangTarif['tarif3'] ?? null,
                        "tarifFasilitas" => $barangTarif['tarifFasilitas3'] ?? null,
                        "jumlahSatuan" => $validated['jumlahSatuan6'] ?? null,
                        "kodeFasilitasTarif" => $validated['kodeFasilitasTarif'] ?? null,
                    ]
                ];
            }, $validated['barangTarif'] ?? []),
            'kodeJenisPungutan' => array_map(function ($kodeJenisPungutan) {
                return [
                    "jumlahSatuan" => $kodeJenisPungutan["jumlahSatuan7"] ?? null,
                    "kodeFasilitasTarif" => $kodeJenisPungutan["kodeFasilitasTarif5"] ?? null,
                    "kodeJenisPungutan" => $kodeJenisPungutan["kodeJenisPungutan4"] ?? null,
                    "kodeJenisTarif" => $kodeJenisPungutan["kodeJenisTarif4"] ?? null,
                    "kodeSatuanBarang" => $kodeJenisPungutan["kodeSatuanBarang5"] ?? null,
                    "nilaiBayar" => $kodeJenisPungutan["nilaiBayar4"] ?? null,
                    "nilaiFasilitas" => $kodeJenisPungutan["nilaiFasilitas4"] ?? null,
                    "nilaiSudahDilunasi" => $kodeJenisPungutan["nilaiSudahDilunasi4"] ?? null,
                    "tarif" => $kodeJenisPungutan["tarif4"] ?? null,
                    "tarifFasilitas" => $kodeJenisPungutan["tarifFasilitas4"] ?? null,
                ];
            }, $validated['barangDokumen'] ?? []),
            'barangDokumen' => array_map(function ($barangDokumen) {
                return [
                    "seriDokumen" => $barangDokumen["seriDokumen"] ?? null,
                    "seriIjin" => $barangDokumen["seriIjin2"] ?? null,
                ];
            }, $validated['barangDokumen'] ?? []),
            'bahanBakuTarif' => array_map(function ($bahanBakuTarif) {
                return [
                    "kodeJenisTarif" => $bahanBakuTarif['kodeJenisTarif5'] ?? null,
                    "jumlahSatuan" => $bahanBakuTarif['jumlahSatuan8'] ?? null,
                    "kodeFasilitasTarif" => $bahanBakuTarif['kodeFasilitasTarif6'] ?? null,
                    "kodeJenisPungutan" => $bahanBakuTarif['kodeJenisPungutan5'] ?? null,
                    "nilaiBayar" => $bahanBakuTarif['nilaiBayar5'] ?? null,
                    "nilaiFasilitas" => $bahanBakuTarif['nilaiFasilitas5'] ?? null,
                    "nilaiSudahDilunasi" => $bahanBakuTarif['nilaiSudahDilunasi5'] ?? null,
                    "seriBahanBaku" => $bahanBakuTarif['seriBahanBaku3'] ?? null,
                    "tarif" => $bahanBakuTarif['tarif5'] ?? null,
                    "tarifFasilitas" => $bahanBakuTarif['tarifFasilitas5'] ?? null,
                ];
            }, $validated['bahanBakuTarif'] ?? []),
            'entitas' => array_map(function ($entitas)  {
                return [
                        "alamatEntitas" => $entitas['alamatEntitas'] ?? null,
                        "kodeEntitas" => $entitas['kodeEntitas'] ?? null,
                        "kodeJenisApi" => $entitas['kodeJenisApi'] ?? null,
                        "kodeJenisIdentitas" => $entitas['kodeJenisIdentitas'] ?? null,
                        "kodeStatus" => $entitas['kodeStatus'] ?? null,
                        "namaEntitas" => $entitas['namaEntitas'] ?? null,
                        "nibEntitas" => $entitas['nibEntitas'] ?? null,
                        "nomorIdentitas" => $entitas['nomorIdentitas'] ?? null,
                        "nomorIjinEntitas" => $entitas['nomorIjinEntitas'] ?? null,
                        "tanggalIjinEntitas" => $entitas['tanggalIjinEntitas'] ?? null,
                        "seriEntitas" => $entitas['seriEntitas'] ?? null,
                   [
                    "alamatEntitas" => $entitas['alamatEntitas'] ?? null,
                        "kodeEntitas" => $entitas['kodeEntitas2'] ?? null,
                        "kodeJenisApi" => $entitas['kodeJenisApi2'] ?? null,
                        "kodeJenisIdentitas" => $entitas['kodeJenisIdentitas2'] ?? null, "kodeStatus" => $entitas['kodeStatus2'] ?? null,
                        "namaEntitas" => $entitas['namaEntitas2'] ?? null,
                        "niperEntitas" => $entitas['niperEntitas'] ?? null,
                        "nomorIdentitas" => $entitas['nomorIdentitas2'] ?? null,
                        "kodeEntitas" => $entitas['kodeEntitas2'] ?? null,
                        "kodeJenisApi" => $entitas['kodeJenisApi2'] ?? null,
                        "kodeJenisIdentitas" => $entitas['kodeJenisIdentitas2'] ?? null,
                        "kodeStatus" => $entitas['kodeStatus2'] ?? null,
                        "namaEntitas" => $entitas['namaEntitas2'] ?? null,
                        "niperEntitas" => $entitas['niperEntitas'] ?? null,
                        "nomorIdentitas" => $entitas['nomorIdentitas2'] ?? null,
                   ],
                   [
                        "alamatEntitas" => $entitas['alamatEntitas3'] ?? null,
                        "kodeEntitas" => $entitas['kodeEntitas3'] ?? null,
                        "kodeJenisApi" => $entitas['kodeJenisApi3'] ?? null,
                        "kodeJenisIdentitas" => $entitas['kodeJenisIdentitas3'] ?? null,
                        "kodeStatus" => $entitas['kodeStatus3'] ?? null,
                        "kodeStatus3" => $entitas['namaEntitas3'] ?? null,
                        "niperEntitas2" => $entitas['niperEntitas2'] ?? null,
                        "nomorIdentitas3" => $entitas['nomorIdentitas3'] ?? null,
                        "seriEntitas" => $entitas['seriEntitas3'] ?? null,
                    ]
                ];
            }, $validated['entitas'] ?? []),
            'kemasan' => array_map(function ($kemasan) {
                return [
                                "jumlahKemasan" => $kemasan['jumlahKemasan2'] ?? null,
                                "kodeJenisKemasan" => $kemasan['kodeJenisKemasan2'] ?? null,
                                "merkKemasan" => $kemasan['merkKemasan'] ?? null,
                                "seriKemasan" => $kemasan['seriKemasan'] ?? null,
                ];
            }, $validated['kemasan'] ?? []),
            'kontainer' => array_map(function ($kontainer) {
                return [
                            "kodeJenisKontainer" => $validated['kodeJenisKontainer'] ?? null,
                            "kodeTipeKontainer" => $validated['kodeTipeKontainer'] ?? null,
                            "kodeUkuranKontainer" => $validated['kodeUkuranKontainer'] ?? null,
                            "nomorKontainer" => $validated['nomorKontainer'] ?? null,
                            "seriKontainer" => $validated['seriKontainer'] ?? null,
                ];
            }, $validated['kontainer'] ?? []),
            'dokumen' => array_map(function ($dokumen)  {
                return [
                                   "idDokumen" => $validated['idDokumen'] ?? null,
                                    "kodeDokumen" => $validated['kodeDokumen2'] ?? null,
                                    "nomorDokumen" => $validated['nomorDokumen'] ?? null,
                                    "seriDokumen" => $validated['seriDokumen3'] ?? null,
                                    "tanggalDokumen" => $validated['tanggalDokumen'] ?? null,
                    // Menambahkan array kedua sebagai elemen array pertama
                    [
                                    "idDokumen" => $validated['idDokumen2'] ?? null,
                                    "kodeDokumen" => $validated['kodeDokumen3'] ?? null,
                                    "nomorDokumen" => $validated['nomorDokumen2'] ?? null,
                                    "seriDokumen" => $validated['seriDokumen4'] ?? null,
                                    "tanggalDokumen" => $validated['tanggalDokumen2'] ?? null,
                    ]
                ];
            }, $validated['dokumen'] ?? []),
            'pengangkut' => array_map(function ($pengangkut)  {
                return [
                                "kodeCaraAngkut" => $pengangkut['kodeCaraAngkut'] ?? null,
                                "namaPengangkut" => $pengangkut['namaPengangkut'] ?? null,
                                "nomorPengangkut" => $pengangkut['nomorPengangkut'] ?? null,
                                "seriPengangkut" => $pengangkut['seriPengangkut'] ?? null,
                            ];
             }, $validated['pengangkut'] ?? []),

        ];
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
