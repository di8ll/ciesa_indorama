<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpbBc25 extends Model
{
    use HasFactory;

    protected $table = 'tpb_bc25';

    protected $fillable = [
        'asalData',
        'bruto',
        'cif',
        'dasarPengenaanPajak',
        'disclaimer',
        'kodeJenisTpb',
        'hargaPenyerahan',
        'idPengguna',
        'jabatanTtd',
        'jumlahKontainer',
        'kodeCaraBayar',
        'kodeDokumen',
        'kodeKantor',
        'kodeLokasiBayar',
        'kodeTujuanPengiriman',
        'kodeValuta',
        'kotaTtd',
        'namaTtd',
        'ndpbm',
        'netto',
        'nomorAju',
        'seri',
        'tanggalAju',
        'tanggalTtd',
        'volume',
        'ppnPajak',
        'ppnbmPajak',
        'tarifPpnPajak',
        'tarifPpnbmPajak',
    ];
}
