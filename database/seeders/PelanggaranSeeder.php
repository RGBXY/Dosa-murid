<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG001',
            'nama_pelanggaran' => 'Terlambat',
            'point' => 1700,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG002',
            'nama_pelanggaran' => 'Tidak membawa topi',
            'point' => 10,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG003',
            'nama_pelanggaran' => 'Tidak membawa dasi',
            'point' => 20,
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLG999',
            'nama_pelanggaran' => 'Kesalahan Berpikir',
            'point' => 89,
        ]);
    }
}
