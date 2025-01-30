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
        $validated = $request->all();

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


    // Struktur JSON yang sesuai dengan API eksternal
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
                        'barang' => isset($validated['barang']) ? $validated['barang'] : [[
                                "bruto" => $validated['bruto2'] ?? null,
                                "cif" => $validated['cif2'] ?? null,
                                "diskon" => $validated['diskon'] ?? null,
                                "fob" => $validated['fob'] ?? null,
                                "freight" => $validated['freight'] ?? null,
                                "hargaEkspor" => $validated['hargaEkspor'] ?? null,
                                "hargaPenyerahan" => $validated['hargaPenyerahan2'] ?? null,
                                "isiPerKemasan" => $validated['isiPerKemasan'] ?? null,
                                "jumlahKemasan" => $validated['jumlahKemasan'] ?? null,
                                "jumlahSatuan" => $validated['jumlahSatuan'] ?? null,
                                "kodeBarang" => $validated['kodeBarang'] ?? null,
                                "kodeGunaBarang" => $validated['kodeGunaBarang'] ?? null,
                                "kodeKategoriBarang" => $validated['kodeKategoriBarang'] ?? null,
                                "kodeJenisKemasan" => $validated['kodeJenisKemasan'] ?? null,
                                "kodeKondisiBarang" => $validated['kodeKondisiBarang'] ?? null,
                                "kodePerhitungan" => $validated['kodePerhitungan'] ?? null,
                                "kodeSatuanBarang" => $validated['kodeSatuanBarang'] ?? null,
                                "merk" => $validated['merk'] ?? null,
                                "netto" => $validated['netto2'] ?? null,
                                "nilaiBarang" => $validated['nilaiBarang'] ?? null,
                                "posTarif" => $validated['posTarif'] ?? null,
                                "seriBarang" => $validated['seriBarang'] ?? null,
                                "spesifikasiLain" => $validated['spesifikasiLain'] ?? null,
                                "tipe" => $validated['tipe'] ?? null,
                                "ukuran" => $validated['ukuran'] ?? null,
                                "uraian" => $validated['uraian'] ?? null,
                                "ndpbm" => $validated['ndpbm2'] ?? null,
                                "cifRupiah" => $validated['cifRupiah'] ?? null,
                                "hargaPerolehan" => $validated['hargaPerolehan'] ?? null,
                                "kodeDokAsal" => $validated['kodeDokAsal'] ?? null,
                                "flag4tahun" => $validated['flag4tahun'] ?? null

                        ]],
                        'bahanBaku' => isset($validated['bahanBaku']) ? $validated['bahanBaku'] : [[
                                "kodeBahanBaku" => $validated['kodeBahanBaku'] ?? null,
                                "jumlah" => $validated['jumlah'] ?? null,
                                "cif" => $validated['cif3'] ?? null,
                                "cifRupiah" => $validated['cifRupiah2'] ?? null,
                                "hargaPenyerahan" => $validated['hargaPenyerahan3'] ?? null,
                                "jumlahSatuan" => $validated['jumlahSatuan2'] ?? null,
                                "kodeAsalBahanBaku" => $validated['kodeAsalBahanBaku'] ?? null,
                                "kodeBarang" => $validated['kodeBarang2'] ?? null,
                                "kodeDokAsal" => $validated['kodeDokAsal2'] ?? null,
                                "kodeKantor" => $validated['kodeKantor2'] ?? null,
                                "kodeSatuanBarang" => $validated['kodeSatuanBarang2'] ?? null,
                                "merkBarang" => $validated['merkBarang'] ?? null,
                                "ndpbm" => $validated['ndpbm3'] ?? null,
                                "nomorAjuDokAsal" => $validated['nomorAjuDokAsal'] ?? null,
                                "nomorDaftarDokAsal" => $validated['nomorDaftarDokAsal'] ?? null,
                                "posTarif" => $validated['posTarif2'] ?? null,
                                "seriBahanBaku" => $validated['seriBahanBaku'] ?? null,
                                "seriBarang" => $validated['seriBarang2'] ?? null,
                                "seriBarangDokAsal" => $validated['seriBarangDokAsal'] ?? null,
                                "seriIjin" => $validated['seriIjin'] ?? null,
                                "spesifikasiLainBarang" => $validated['spesifikasiLainBarang'] ?? null,
                                "tanggalDaftarDokAsal" => $validated['tanggalDaftarDokAsal'] ?? null,
                                "tipeBarang" => $validated['tipeBarang'] ?? null,
                        ]],
                        'bahanBakuTarif' => isset($validated['bahanBakuTarif']) ? $validated['bahanBakuTarif'] : [[
                                "kodeJenisTarif" => $validated['kodeJenisTarif'] ?? null,
                                "jumlahSatuan" => $validated['jumlahSatuan3'] ?? null,
                                "kodeFasilitasTarif" => $validated['kodeFasilitasTarif'] ?? null,
                                "kodeJenisPungutan" => $validated['kodeJenisPungutan'] ?? null,
                                "nilaiBayar" => $validated['nilaiBayar'] ?? null,
                                "nilaiFasilitas" => $validated['nilaiFasilitas'] ?? null,
                                "nilaiSudahDilunasi" => $validated['nilaiSudahDilunasi'] ?? null,
                                "seriBahanBaku" => $validated['seriBahanBaku2'] ?? null,
                                "tarif" => $validated['tarif'] ?? null,
                                "tarifFasilitas" => $validated['tarifFasilitas'] ?? null,
                                "ukuranBarang" => $validated['ukuranBarang'] ?? null,
                                "uraianBarang" => $validated['uraianBarang'] ?? null,
                        ]],
                        'barangDokumen' => isset($validated['barangDokumen']) ? $validated['barangDokumen'] : [[
                                "seriDokumen" => $validated['seriDokumen'] ?? null,
                                "seriIjin" => $validated['seriIjin2'] ?? null,
                        ]],
                        'barangTarif' => isset($validated['barangTarif']) ? $validated['barangTarif'] : [
                            [
                                "seriBarang" => $validated['seriBarang3'] ?? 1,
                                "kodeJenisTarif" => $validated['kodeJenisTarif2'] ?? "1",
                                "jumlahSatuan" => $validated['jumlahSatuan4'] ?? 100,
                                "kodeFasilitasTarif" => $validated['kodeFasilitasTarif2'] ?? "FT001",
                                "kodeSatuanBarang" => $validated['kodeSatuanBarang3'] ?? "PCS",
                                "kodeJenisPungutan" => $validated['kodeJenisPungutan2'] ?? "BM",
                                "nilaiBayar" => $validated['nilaiBayar2'] ?? 5000.00,
                                "nilaiFasilitas" => $validated['nilaiFasilitas2'] ?? 2000.00,
                                "nilaiSudahDilunasi" => $validated['nilaiSudahDilunasi2'] ?? 3000,
                                "tarif" => $validated['tarif2'] ?? 1,
                                "tarifFasilitas" => $validated['tarifFasilitas2'] ?? 1,
                            ]
                        ],
                        'barangTarif' => isset($validated['barangTarif']) ? $validated['barangTarif'] : [
                            [
                                "seriBarang" => $validated['seriBarang4'] ?? 1,
                                "kodeJenisTarif" => $validated['kodeJenisTarif3'] ?? "1",
                                "jumlahSatuan" => $validated['jumlahSatuan5'] ?? 100,
                                "kodeFasilitasTarif" => $validated['kodeFasilitasTarif3'] ?? "FT001",
                                "kodeSatuanBarang" => $validated['kodeSatuanBarang4'] ?? "PCS",
                                "kodeJenisPungutan" => $validated['kodeJenisPungutan3'] ?? "BM",
                                "nilaiBayar" => $validated['nilaiBayar3'] ?? 5000.00,
                                "nilaiFasilitas" => $validated['nilaiFasilitas3'] ?? 2000.00,
                                "nilaiSudahDilunasi" => $validated['nilaiSudahDilunasi3'] ?? 3000,
                                "tarif" => $validated['tarif3'] ?? 1,
                                "tarifFasilitas" => $validated['tarifFasilitas3'] ?? 1,
                            ]
                        ],

                        "jumlahSatuan" => $validated['jumlahSatuan6'] ?? null,
                        "kodeFasilitasTarif" => $validated['kodeFasilitasTarif4'] ?? null,
                        'kodeJenisPungutan' => isset($validated['kodeJenisPungutan']) ? $validated['kodeJenisPungutan'] : [[
                                "jumlahSatuan" => $validated['jumlahSatuan7'] ?? null,
                                "kodeFasilitasTarif" => $validated['kodeFasilitasTarif5'] ?? null,
                                "kodeJenisPungutan" => $validated['kodeJenisPungutan4'] ?? null,
                                "kodeJenisTarif" => $validated['kodeJenisTarif4'] ?? null,
                                "kodeSatuanBarang" => $validated['kodeSatuanBarang5'] ?? null,
                                "nilaiBayar" => $validated['nilaiBayar4'] ?? null,
                                "nilaiFasilitas" => $validated['nilaiFasilitas4'] ?? null,
                                "nilaiSudahDilunasi" => $validated['nilaiSudahDilunasi4'] ?? null,
                                "tarif" => $validated['tarif4'] ?? null,
                                "tarifFasilitas" => $validated['tarifFasilitas4'] ?? null,
                        ]],
                        'barangDokumen' => isset($validated['barangDokumen']) ? $validated['barangDokumen'] : [[
                            "seriDokumen" => $validated['seriDokumen2'] ?? null,
                            "seriIjin" => $validated['seriIjin3'] ?? null,
                        ]],
                        'bahanBakuTarif' => isset($validated['bahanBakuTarif']) ? $validated['bahanBakuTarif'] : [[
                                "kodeJenisTarif" => $validated['kodeJenisTarif5'] ?? null,
                                "jumlahSatuan" => $validated['jumlahSatuan8'] ?? null,
                                "kodeFasilitasTarif" => $validated['kodeFasilitasTarif6'] ?? null,
                                "kodeJenisPungutan" => $validated['kodeJenisPungutan5'] ?? null,
                                "nilaiBayar" => $validated['nilaiBayar5'] ?? null,
                                "nilaiFasilitas" => $validated['nilaiFasilitas5'] ?? null,
                                "nilaiSudahDilunasi" => $validated['nilaiSudahDilunasi5'] ?? null,
                                "seriBahanBaku" => $validated['seriBahanBaku3'] ?? null,
                                "tarif" => $validated['tarif5'] ?? null,
                                "tarifFasilitas" => $validated['tarifFasilitas5'] ?? null,
                        ]],
                        'entitas' => isset($validated['entitas']) ? $validated['entitas'] : [
                            [
                                "alamatEntitas" => $validated['alamatEntitas'] ?? null,
                                "kodeEntitas" => $validated['kodeEntitas'] ?? null,
                                "kodeJenisApi" => $validated['kodeJenisApi'] ?? null,
                                "kodeJenisIdentitas" => $validated['kodeJenisIdentitas'] ?? null,
                                "kodeStatus" => $validated['kodeStatus'] ?? null,
                                "namaEntitas" => $validated['namaEntitas'] ?? null,
                                "nibEntitas" => $validated['nibEntitas'] ?? null,
                                "nomorIdentitas" => $validated['nomorIdentitas'] ?? null,
                                "nomorIjinEntitas" => $validated['nomorIjinEntitas'] ?? null,
                                "tanggalIjinEntitas" => $validated['tanggalIjinEntitas'] ?? null,
                                "seriEntitas" => $validated['seriEntitas'] ?? null,
                            ],
                            [
                                "alamatEntitas" => $validated['alamatEntitas2'] ?? null,
                                "kodeEntitas" => $validated['kodeEntitas2'] ?? null,
                                "kodeJenisApi" => $validated['kodeJenisApi2'] ?? null,
                                "kodeJenisIdentitas" => $validated['kodeJenisIdentitas2'] ?? null,
                                "kodeStatus" => $validated['kodeStatus2'] ?? null,
                                "namaEntitas" => $validated['namaEntitas2'] ?? null,
                                "niperEntitas" => $validated['niperEntitas'] ?? null,
                                "nomorIdentitas" => $validated['nomorIdentitas2'] ?? null,
                                "seriEntitas" => $validated['seriEntitas2'] ?? null,
                            ],
                            [
                                "alamatEntitas" => $validated['alamatEntitas3'] ?? null,
                                "kodeEntitas" => $validated['kodeEntitas3'] ?? null,
                                "kodeJenisApi" => $validated['kodeJenisApi3'] ?? null,
                                "kodeJenisIdentitas" => $validated['kodeJenisIdentitas3'] ?? null,
                                "kodeStatus" => $validated['kodeStatus3'] ?? null,
                                "namaEntitas" => $validated['namaEntitas3'] ?? null,
                                "niperEntitas" => $validated['niperEntitas2'] ?? null,
                                "nomorIdentitas" => $validated['nomorIdentitas3'] ?? null,
                                "seriEntitas" => $validated['seriEntitas3'] ?? null,
                        ]],
                        'kemasan' => isset($validated['kemasan']) ? $validated['kemasan'] : [
                            [
                                "jumlahKemasan" => $validated['jumlahKemasan2'] ?? null,
                                "kodeJenisKemasan" => $validated['kodeJenisKemasan2'] ?? null,
                                "merkKemasan" => $validated['merkKemasan'] ?? null,
                                "seriKemasan" => $validated['seriKemasan'] ?? null,
                        ]],
                        'kontainer' => isset($validated['kontainer']) ? $validated['kontainer'] : [
                            [
                                "kodeJenisKontainer" => $validated['kodeJenisKontainer'] ?? null,
                                "kodeTipeKontainer" => $validated['kodeTipeKontainer'] ?? null,
                                "kodeUkuranKontainer" => $validated['kodeUkuranKontainer'] ?? null,
                                "nomorKontainer" => $validated['nomorKontainer'] ?? null,
                                "seriKontainer" => $validated['seriKontainer'] ?? null,
                        ]],
                        'dokumen' => isset($validated['dokumen']) ? $validated['dokumen'] : [
                            [
                                "idDokumen" => $validated['idDokumen'] ?? null,
                                "kodeDokumen" => $validated['kodeDokumen2'] ?? null,
                                "nomorDokumen" => $validated['nomorDokumen'] ?? null,
                                "seriDokumen" => $validated['seriDokumen3'] ?? null,
                                "tanggalDokumen" => $validated['tanggalDokumen'] ?? null,
                            ],
                            [
                                "idDokumen" => $validated['idDokumen2'] ?? null,
                                "kodeDokumen" => $validated['kodeDokumen3'] ?? null,
                                "nomorDokumen" => $validated['nomorDokumen2'] ?? null,
                                "seriDokumen" => $validated['seriDokumen4'] ?? null,
                                "tanggalDokumen" => $validated['tanggalDokumen2'] ?? null,
                        ]],

                        'pengangkut' => isset($validated['pengangkut']) ? $validated['pengangkut'] : [
                            [
                                "kodeCaraAngkut" => $validated['kodeCaraAngkut'] ?? null,
                                "namaPengangkut" => $validated['namaPengangkut'] ?? null,
                                "kodeUkuranKontainer" => $validated['kodeUkuranKontainer'] ?? null,
                                "nomorPengangkut" => $validated['nomorPengangkut'] ?? null,
                                "seriPengangkut" => $validated['seriPengangkut'] ?? null,
                        ]],

                        ];


    // URL API eksternal
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
