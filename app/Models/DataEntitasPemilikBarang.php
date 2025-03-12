<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataEntitasPemilikBarang extends Model
{
    use HasFactory;

    protected $table = 'data_entitas_pemilik_barang';
    // Disable timestamps
    public $timestamps = false;

    protected $fillable = [
        'nomorIdentitas',
        'namaEntitas',
        'alamatEntitas',
        'kodeEntitas',
        'kodeJenisApi',
        'kodeJenisIdentitas',
        'kodeStatus',
        'niperEntitas',
        'seriEntitas',
    ];
}
