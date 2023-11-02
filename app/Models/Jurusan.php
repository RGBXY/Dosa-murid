<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillale = [
        'kode_jurusan',
        'nama_jurusan',
    ];

    public function kelas(){
        return $this->hasMany(Kelas::class, 'kode_jurusan', 'kode_jurursan');
    }
}
// seeder factory