<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudiSeeder extends Seeder
{
    public function run()
    {
        DB::table('program_studi')->insert([
            ['nama_progdi' => 'Informatika'],
            ['nama_progdi' => 'Sistem Informasi'],
            ['nama_progdi' => 'Teknik Komputer'],
        ]);
    }
}
