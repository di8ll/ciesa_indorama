<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiHSCode extends Model
{
    use HasFactory;

    protected $table = 'data_referensi_hs_code';

    protected $fillable = [
        'kode_dokumen',
        'nama_dokumen',
    ];
}