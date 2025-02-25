<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenerimaPajak extends Model
{
    use HasFactory;

    protected $table = 'data_penerima_pajak';

    protected $fillable = [
        'npwp',
        'nama',
        'alamat',
        'negara',
    ];
}
