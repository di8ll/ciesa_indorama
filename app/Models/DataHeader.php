<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataHeader extends Model
{
    use HasFactory;

    protected $table = 'data_header';
    // Disable timestamps
    public $timestamps = false;
    protected $fillable = [
        'nomorAju',
        'kodeKantor',
        'kodeJenisTpb',
        'kodeTujuanPengiriman',
        'kodeCaraBayar',
    ];
}
