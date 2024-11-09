<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    // Method untuk menampilkan data mahasiswa dalam format JSON
    public function index()
    {
        // Ambil data mahasiswa beserta program studi terkait menggunakan Eloquent dengan relasi
        $dataMahasiswa = DataMahasiswa::with('programStudi')->get();

        // Kembalikan data dalam format JSON
        return response()->json($dataMahasiswa);
    }
}
