<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataEntitasPenyelenggara extends Model
{
    use HasFactory;

    protected $table = 'data_entitas_penyelenggara';
    // Disable timestamps
    public $timestamps = false;

    protected $fillable = [
        'nomorIdentitas', 'namaEntitas', 'alamatEntitas',
        'kodeEntitas', 'kodeJenisApi', 'kodeJenisIdentitas',
        'kodeStatus', 'niperEntitas', 'seriEntitas'
    ];
}
