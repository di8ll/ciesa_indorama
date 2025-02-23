<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'datadokumen';
    protected $primaryKey = 'idDokumen'; // Primary key yang digunakan

    protected $fillable = [
        'kodeDokumen',
        'nomorDokumen',
        'tanggalDokumen',
    ];

    public $incrementing = true; // Pastikan auto-increment aktif
    protected $keyType = 'int'; // Tipe integer
}
