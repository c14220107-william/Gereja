<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_penyerahan_anak extends Model
{
    use HasFactory;
    protected $table = 'form_penyerahan_anaks';
    protected $fillable = [
        'nama_anak',
        'nomor_telp_penanggungjawab_anak',
        'tempat_lahir_anak',
        'tanggal_lahir_anak',
        'nama_ayah_anak',
        'nama_ibu_anak',
        'alamat_anak',
        'kelurahan_anak',
        'kecamatan_anak',
        'asal_gereja_anak',
        'lama_ibadah_anak',
        'tempat_asal_dibaptis',
        'tanggal_dibaptis_gereja_lama',
        'nomor_piagam_pernikahan_parent',
        'tanggal_pernikahan',
        'nomor_akte_pernikahan_parent',
        'tanggal_akte_pernikahan',
        'pas_foto_anak',
    ];
}
