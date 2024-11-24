<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persembahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'kategori',
        'jumlah',
        'detail'

    ];
}
