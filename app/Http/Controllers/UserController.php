<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Soal 6A - Menampilkan Semua Data Pengguna dalam JSON
    public function getAllUsers()
    {
        // Ambil semua data pengguna dari database
        $users = User::all();

        // Mengembalikan data pengguna dalam format JSON
        return response()->json([
            'message' => 'All users retrieved successfully.',
            'data' => $users
        ]);
    }

    // Soal 6B - Mengambil Data Pengguna Berdasarkan ID yang Dienkripsi
    public function getUserByEncryptedId(Request $request)
    {
        // Menerima parameter ID yang dienkripsi dari request
        $encryptedId = $request->input('id');

        try {
            // Mendekripsi ID yang diterima
            $decryptedId = Crypt::decryptString($encryptedId);

            // Mencari user berdasarkan ID yang sudah didekripsi
            $user = User::find($decryptedId);

            // Jika user ditemukan
            if ($user) {
                // Mengembalikan data user dalam bentuk JSON, termasuk ID yang dienkripsi
                return response()->json([
                    'id' => $encryptedId,  // Menampilkan ID yang dienkripsi dalam response
                    'user' => $user
                ]);
            }

            // Jika user tidak ditemukan
            return response()->json(['message' => 'User not found.'], 404);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat mendekripsi ID
            return response()->json(['message' => 'Invalid or expired ID.'], 400);
        }
    }
}
