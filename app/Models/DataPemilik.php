<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemilik extends Model
{
    use HasFactory;

    protected $table = 'data_pemilik';

    protected $fillable = [
        'npwp',
        'nama',
        'alamat',
        'negara',
    ];
}
