<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\manajemen_jemaat;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        manajemen_jemaat::create([
            'nama' => 'orang',
            'jenis_kelamin' => 'pria', 
            'nomor_telp' => '08125467',
            'alamat' => 'mars',
            'tempat_lahir' => 'Surabaya', 
            'tanggal_lahir' => '2000-04-23',
        ]);
    }
}
