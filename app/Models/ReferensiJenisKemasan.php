<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiJenisKemasan extends Model
{
    use HasFactory;

    protected $table = 'data_jenis_kemasan';

    protected $fillable = [
        'kode_dokumen',
        'nama_dokumen',
    ];
}
