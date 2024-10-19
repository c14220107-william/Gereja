<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_baptisan extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'nama_anak',
        'nomor_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kelurahan',
        'beribadah_di',
        'nama_ayah',
        'nama_ibu',
        'tanggal_baptis',
        'pembaptis',
        'file_foto_pemohon_baptis',
    ];
}
