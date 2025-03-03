<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiKategoriBarang extends Model
{
    use HasFactory;

    protected $table = 'data_referensi_kategori_barang';

    protected $fillable = [
        'kode_dokumen',
        'kode_kategori_barang',
        'nama_kategori_barang',
    ];
}