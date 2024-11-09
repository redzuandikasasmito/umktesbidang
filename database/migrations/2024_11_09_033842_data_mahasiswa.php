<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->id();  // Kolom id otomatis ditambah, tipe data BIGINT
            $table->string('nama');  // Kolom nama untuk nama mahasiswa
            $table->string('nim')->unique();  // Kolom NIM, pastikan unik
            $table->foreignId('id_progdi')->constrained('program_studi')->onDelete('cascade');  // Relasi ke tabel program_studi
            $table->text('alamat');  // Kolom alamat
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    
    public function down()
    {
        //
        Schema::dropIfExists('data_mahasiswa');
    }
};
