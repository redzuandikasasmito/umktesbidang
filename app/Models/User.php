<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan oleh model ini
    protected $table = 'users';

    // Daftar kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'avatar',
    ];

    // Daftar kolom yang harus di-cast menjadi tipe data tertentu
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Menambahkan properti untuk timestamps (created_at dan updated_at)
    public $timestamps = true;

    /**
     * Relasi dengan model lainnya (misalnya jika ada relasi dengan model lain)
     *
     * Contoh: Jika User memiliki banyak Post
     */
    // public function posts()
    // {
    //     
}