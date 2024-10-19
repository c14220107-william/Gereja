<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_pernikahan extends Model
{
    use HasFactory;
    protected $table = 'form_pernikahans';
    protected $fillable = [
        'hari_pemberkatan',
        'tanggal_pemberkatan',
        'pukul_pemberkatan',
        'permohonan_pemberkatan1',
        'permohonan_pemberkatan2',
        'nama_calon_mempelai_pria',
        'nomor_telp_calon_mempelai_pria',
        'alamat_calon_mempelai_pria',
        'tempat_lahir_calon_mempelai_pria',
        'tanggal_lahir_calon_mempelai_pria',
        'nomor_ktp_calon_mempelai_pria',
        'nomor_surat_baptis_calon_mempelai_pria',
        'asal_gereja_baptis_calon_mempelai_pria',
        'gereja_sekarang_calon_mempelai_pria',
        'pekerjaan_calon_mempelai_pria',
        'alamat_pekerjaan_calon_mempelai_pria',
        'telp_pekerjaan_calon_mempelai_pria',
        'nama_ayah_calon_mempelai_pria',
        'nama_ibu_calon_mempelai_pria',
        'alamat_orangtua_calon_mempelai_pria',
        'nomor_telp_orangtua_calon_mempelai_pria',
        'persetujuan_orangtua_calon_mempelai_pria',
        'riwayat_calon_mempelai_pria',
        'status_calon_mempelai_pria',

        'nama_calon_mempelai_wanita',
        'nomor_telp_calon_mempelai_wanita',
        'alamat_calon_mempelai_wanita',
        'tempat_lahir_calon_mempelai_wanita',
        'tanggal_lahir_calon_mempelai_wanita',
        'nomor_ktp_calon_mempelai_wanita',
        'nomor_surat_baptis_calon_mempelai_wanita',
        'asal_gereja_baptis_calon_mempelai_wanita',
        'gereja_sekarang_calon_mempelai_wanita',
        'pekerjaan_calon_mempelai_wanita',
        'alamat_pekerjaan_calon_mempelai_wanita',
        'telp_pekerjaan_calon_mempelai_wanita',
        'nama_ayah_calon_mempelai_wanita',
        'nama_ibu_calon_mempelai_wanita',
        'alamat_orangtua_calon_mempelai_wanita',
        'nomor_telp_orangtua_calon_mempelai_wanita',
        'persetujuan_orangtua_calon_mempelai_wanita',
        'riwayat_calon_mempelai_wanita',
        'status_calon_mempelai_wanita',
        'cek_surat_sipil',
        'file_surat_catatan_sipil'


        




    ];

}
