<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studi';

    protected $fillable = ['nama_progdi'];

    // Relasi: ProgramStudi has many DataMahasiswa
    public function dataMahasiswas()
    {
        return $this->hasMany(DataMahasiswa::class, 'id_progdi');
    }
}
