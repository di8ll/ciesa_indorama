<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Pastikan ini ada
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'username',
        'password',
        'access_token', // Tambahkan akses token
    ];

    // Tentukan kolom yang tidak dapat diisi
    protected $guarded = [];

    // Set password yang akan di-hash secara otomatis sebelum disimpan ke database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
