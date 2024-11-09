<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';

    protected $fillable = ['nama'];

    // Relasi siswa 
    public function nilaiSiswa()
    {
        return $this->hasMany(NilaiSiswa::class, 'id_siswa');
    }
}
