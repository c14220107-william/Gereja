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
        Schema::create('form_penyerahan_anaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak'); // Nama Anak
            $table->string('nomor_telp_penanggungjawab_anak'); // Nomor Telepon Penanggung Jawab Anak
            $table->string('tempat_lahir_anak'); // Tempat Lahir
            $table->date('tanggal_lahir_anak'); // Tanggal Lahir
            $table->string('nama_ayah_anak'); // Nama Ayah
            $table->string('nama_ibu_anak'); // Nama Ibu
            $table->string('alamat_anak'); // Alamat
            $table->string('kelurahan_anak'); // Kelurahan
            $table->string('kecamatan_anak'); // Kecamatan
            $table->string('asal_gereja_anak'); // Asal Gereja
            $table->string('lama_ibadah_anak'); // Sudah Berapa Lama Beribadah
            $table->string('tempat_asal_dibaptis')->nullable(); // Tempat Asal Dibaptis (optional)
            $table->date('tanggal_dibaptis_gereja_lama')->nullable(); // Tanggal Baptis Gereja (optional)
            $table->string('nomor_piagam_pernikahan_parent')->nullable(); // Nomor Piagam Pernikahan (optional)
            $table->date('tanggal_pernikahan')->nullable(); // Tanggal Pernikahan (optional)
            $table->string('nomor_akte_pernikahan_parent')->nullable(); // Nomor Akte Pernikahan (optional)
            $table->date('tanggal_akte_pernikahan')->nullable(); // Tanggal Akte Pernikahan (optional)
            $table->string('pas_foto_anak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_penyerahan_anaks');
    }
};
