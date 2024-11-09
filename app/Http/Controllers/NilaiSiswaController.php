<?php
namespace App\Http\Controllers;

use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function index()
    {
        // Ambil data nilai siswa relasi nama siswa
        $nilaiPivot = NilaiSiswa::with('siswa') 
            ->select('id_siswa', 'tahun_nilai', 'nilai_siswa')
            ->orderBy('id_siswa')
            ->orderBy('tahun_nilai')
            ->get();

        
        $pivotData = $nilaiPivot->groupBy('id_siswa');

        // View
        return view('pivot', compact('pivotData'));
    }
}
