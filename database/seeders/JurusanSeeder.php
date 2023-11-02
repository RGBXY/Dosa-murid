<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            "kode_jurusan" => "OTKP",
            "Nama_Jurusan" => "Otomatisasi Tata Kelola Perkantoran",
        ]);

        Jurusan::create([
            "kode_jurusan" => "RPL",
            "Nama_Jurusan" => "Rekayasa Perangkat Lunak",
        ]);
        Jurusan::create([
            "kode_jurusan" => "PM",
            "Nama_Jurusan" => "Pemasaran",
        ]);
        Jurusan::create([
            "kode_jurusan" => "AKL",
            "Nama_Jurusan" => "Akuntansi dan Keuangan Lembaga",
        ]);
        Jurusan::create([
            "kode_jurusan" => "TO",
            "Nama_Jurusan" => "Teknik Otomotif",
        ]);
    }
}
