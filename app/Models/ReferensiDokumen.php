<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiDokumen extends Model
{
    use HasFactory;

    protected $table = 'data_referensi_dokumen';

    protected $fillable = [
        'kode_dokumen',
        'nama_dokumen',
    ];
}
