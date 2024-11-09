<?php
namespace App\Http\Controllers;

use App\Helpers\CustomHelper;

class FungsiDua extends Controller
{
    /**
     * Fungsi untuk menguji findOrAdd
     */
    public function testFindOrAdd()
    {
        // Data furnitur
        $furnitures = [
            '1' => 'Meja',
            '2' => 'Kursi',
            '3' => 'Pintu',
            '4' => 'Lemari',
            '5' => 'Dipan',
            '6' => 'Bed',
            '7' => 'Jendela',
            '8' => 'Televisi'
        ];

        // Menggunakan helper findOrAdd untuk menambahkan furnitur baru jika tidak ada
        $newFurnitures = CustomHelper::findOrAdd($furnitures, '9', 'Rak'); // Menambahkan 'Rak' jika tidak ada
        return response()->json([
            'updated_furnitures' => $newFurnitures
        ]);
    }

    /**
     * Fungsi untuk menguji contains
     */
    public function testContains()
    {
        // Data furnitur
        $furnitures = [
            '1' => 'Meja',
            '2' => 'Kursi',
            '3' => 'Pintu',
            '4' => 'Lemari',
            '5' => 'Dipan',
            '6' => 'Bed',
            '7' => 'Jendela',
            '8' => 'Televisi'
        ];

        // Menggunakan helper contains untuk mengecek apakah furnitur tertentu ada
        $containsKursi = CustomHelper::contains($furnitures, 'Kursi');  // true
        $containsRak = CustomHelper::contains($furnitures, 'Rak');  // false

        return response()->json([
            'contains_kursi' => $containsKursi,
            'contains_rak' => $containsRak
        ]);
    }

    /**
     * Fungsi untuk menguji getKeyByValue
     */
    public function testGetKeyByValue()
    {
        // Data furnitur
        $furnitures = [
            '1' => 'Meja',
            '2' => 'Kursi',
            '3' => 'Pintu',
            '4' => 'Lemari',
            '5' => 'Dipan',
            '6' => 'Bed',
            '7' => 'Jendela',
            '8' => 'Televisi'
        ];

        // Menggunakan helper getKeyByValue untuk mencari key berdasarkan nilai
        $keyOfKursi = CustomHelper::getKeyByValue($furnitures, 'Kursi');  // 2
        $keyOfRak = CustomHelper::getKeyByValue($furnitures, 'Rak');  // null

        return response()->json([
            'key_of_kursi' => $keyOfKursi,
            'key_of_rak' => $keyOfRak
        ]);
    }
}
