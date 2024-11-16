<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manajemen_jemaat extends Model
{
    use HasFactory;
    protected $table = 'manajemen_jemaat';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'nomor_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
    ];
}
