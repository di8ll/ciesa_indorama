<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referensivaluta extends Model
{
    use HasFactory;

    protected $table = 'data_referensi_valuta';

    protected $fillable = [
        'kode_valuta',
        'nama_valuta',
    ];
}

