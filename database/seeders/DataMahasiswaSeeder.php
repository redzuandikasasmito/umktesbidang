<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_mahasiswa')->insert([
            [
                'nama' => 'Ram',
                'nim' => '1234567890',
                'id_progdi' => 1,  
                'alamat' => 'Jalan Merdeka No. 1, Jakarta',
            ],
            [
                'nama' => 'Jhon',
                'nim' => '0987654321'
                ,
                'id_progdi' => 2,  
                'alamat' => 'Jalan Pahlawan No. 2, Surabaya',
            ],
            [
                'nama' => 'Neena',
                'nim' => '1122334455',
                'id_progdi' => 1,  
                'alamat' => 'Jalan Merdeka No. 3, Bandung',
            ],
        ]);
    }
}
