<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen_baru';

    protected $fillable = [
        'namaEntitas',
        'jenis_dokumen',
        'nomor_pengajuan',
        'kodeKantor',
        'kodeJenisTpb',
        'kodeTujuanPengiriman',
        'kodeCaraBayar',
        'nomorIdentitas',
        'namaEntitas',
        'alamatEntitas',
        ''
    ];

    /**
     * Generate the next sequential nomor dokumen.
     *
     * @return string
     */
    public static function generateNomorDokumen(): string
    {
        // Ambil dokumen terakhir berdasarkan nomor_pengajuan
        $lastDokumen = self::orderBy('nomor_pengajuan', 'desc')->first();

        // Ambil nomor urut terakhir
        $lastNumber = $lastDokumen ? (int) substr($lastDokumen->nomor_pengajuan, -6) : 0;

        // Tambahkan 1 untuk nomor baru
        $newNumber = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);

        // Buat format nomor dokumen
        $prefix = '000040-010016'; // Ganti sesuai kebutuhan
        $date = now()->format('Ymd');
        return "{$prefix}-{$date}-{$newNumber}";
    }
}
