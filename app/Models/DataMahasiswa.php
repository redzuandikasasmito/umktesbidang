<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'data_mahasiswa';

    protected $fillable = ['nama', 'nim', 'id_progdi', 'alamat'];

    // Relasi: DataMahasiswa belongs to ProgramStudi
    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'id_progdi');
    }
}
