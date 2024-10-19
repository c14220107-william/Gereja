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
        Schema::create('form_baptisans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('nomor_telp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('beribadah_di');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->date('tanggal_baptis');
            $table->string('pembaptis');
            $table->string('file_foto_pemohon_baptis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_baptisans');
    }
};
