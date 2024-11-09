<?php

namespace App\Helpers;

class CustomHelper
{
    /**
     * Fungsi pertama: Jika tidak ditemukan dalam array, tambahkan data baru ke array
     * 
     * @param array $arrayData - Array yang dicari
     * @param mixed $key - Key yang dicari dalam array
     * @param mixed $newData - Data baru yang ingin ditambahkan
     * @return array
     */
    public static function findOrAdd(array $arrayData, $key, $newData)
    {
        // Cek apakah key ada di dalam array
        $found = false;
        foreach ($arrayData as $item) {
            if ($item === $key) {
                $found = true;
                break;
            }
        }

        // Jika tidak ditemukan, tambahkan data baru
        if (!$found) {
            $arrayData[] = $newData;  // Menambahkan data baru ke array
        }
        
        return $arrayData;
    }

    /**
     * Fungsi kedua: Mengembalikan boolean apakah data ada dalam array
     * 
     * @param array $arrayData - Array yang akan dicari
     * @param mixed $key - Key yang akan dicari dalam array
     * @return bool
     */
    public static function contains(array $arrayData, $key)
    {
        // Menelusuri array untuk menemukan apakah key ada
        foreach ($arrayData as $item) {
            if ($item === $key) {
                return true; // Ditemukan
            }
        }
        return false; // Tidak ditemukan
    }

    /**
     * Fungsi ketiga: Mengembalikan key berdasarkan nilai jika ditemukan
     * 
     * @param array $arrayData - Array yang akan dicari
     * @param mixed $value - Nilai yang akan dicari dalam array
     * @return mixed - Key jika ditemukan, null jika tidak
     */
    public static function getKeyByValue(array $arrayData, $value)
    {
        // Telusuri array untuk menemukan key berdasarkan nilai
        foreach ($arrayData as $key => $item) {
            if ($item === $value) {
                return $key;  // Mengembalikan key jika ditemukan
            }
        }
        return null;  // Mengembalikan null jika tidak ditemukan
    }
}
