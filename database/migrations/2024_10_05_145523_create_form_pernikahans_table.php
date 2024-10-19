<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_pernikahans', function (Blueprint $table) {
            $table->id();
            //bagian 1
            $table->string('hari_pemberkatan');
            $table->date('tanggal_pemberkatan');
            $table->string('pukul_pemberkatan');
            $table->boolean('permohonan_pemberkatan1')->default(false);
            $table->boolean('permohonan_pemberkatan2')->default(false);
            //bagian 2
            $table->string('nama_calon_mempelai_pria');
            $table->string('nomor_telp_calon_mempelai_pria');
            $table->string('alamat_calon_mempelai_pria');
            $table->string('tempat_lahir_calon_mempelai_pria');
            $table->date('tanggal_lahir_calon_mempelai_pria');
            $table->string('nomor_ktp_calon_mempelai_pria');
            $table->string('nomor_surat_baptis_calon_mempelai_pria');
            $table->string('asal_gereja_baptis_calon_mempelai_pria');
            $table->string('gereja_sekarang_calon_mempelai_pria');
            $table->string('pekerjaan_calon_mempelai_pria');
            $table->string('alamat_pekerjaan_calon_mempelai_pria');
            $table->string('telp_pekerjaan_calon_mempelai_pria');
            $table->string('nama_ayah_calon_mempelai_pria');
            $table->string('nama_ibu_calon_mempelai_pria');
            $table->string('alamat_orangtua_calon_mempelai_pria');
            $table->string('nomor_telp_orangtua_calon_mempelai_pria');
            $table->boolean('persetujuan_orangtua_calon_mempelai_pria')->default(false);
            $table->boolean('riwayat_calon_mempelai_pria')->default(false);
            $table->boolean('status_calon_mempelai_pria')->default(false);
            //bagian 3
            $table->string('nama_calon_mempelai_wanita');
            $table->string('nomor_telp_calon_mempelai_wanita');
            $table->string('alamat_calon_mempelai_wanita');
            $table->string('tempat_lahir_calon_mempelai_wanita');
            $table->date('tanggal_lahir_calon_mempelai_wanita');
            $table->string('nomor_ktp_calon_mempelai_wanita');
            $table->string('nomor_surat_baptis_calon_mempelai_wanita');
            $table->string('asal_gereja_baptis_calon_mempelai_wanita');
            $table->string('gereja_sekarang_calon_mempelai_wanita');
            $table->string('pekerjaan_calon_mempelai_wanita');
            $table->string('alamat_pekerjaan_calon_mempelai_wanita');
            $table->string('telp_pekerjaan_calon_mempelai_wanita');
            $table->string('nama_ayah_calon_mempelai_wanita');
            $table->string('nama_ibu_calon_mempelai_wanita');
            $table->string('alamat_orangtua_calon_mempelai_wanita');
            $table->string('nomor_telp_orangtua_calon_mempelai_wanita');
            $table->boolean('persetujuan_orangtua_calon_mempelai_wanita')->default(false);
            $table->boolean('riwayat_calon_mempelai_wanita')->default(false);
            $table->boolean('status_calon_mempelai_wanita')->default(false);
            //bagian 4
            $table->boolean('cek_surat_sipil')->default(false);
            $table->string('file_surat_catatan_sipil')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pernikahans');
    }
};
