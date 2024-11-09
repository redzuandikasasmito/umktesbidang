<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\Multidimensi;
use App\Http\Controllers\FungsiDua;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ROUTE SOAL NO 1
Route::get('/soalno1', function () {
    return view('perhitungan');
});

//Route Soal No 2
Route::get('/soalno2a', [FungsiDua::class, 'testFindOrAdd']);
Route::get('/soalno2b', [FungsiDua::class, 'testContains']);
Route::get('/soalno2c', [FungsiDua::class, 'testGetKeyByValue']);

// Route Soal No 3
Route::get('/soalno3', [Multidimensi::class, 'index']);

// ROUTE SOAL NO 4
Route::get('/soalno4', [NilaiSiswaController::class, 'index']);

//Route Soal No 5


//Route Soal No 6 
Route::get('/soalno6a', [UserController::class, 'getAllUsers']);
Route::get('/soalno6b', [UserController::class, 'getUserByEncryptedId']);

//Route Soal No 7 
Route::get('/soalno7', [DataMahasiswaController::class, 'index']);



//Route Soal No 5
Route::post('/soalno5/login', [AuthController::class, 'login']);

Route::get('/soalno5/data', function () {
    return response()->json(['message' => 'This is a protected route.']);
})->middleware('jwt.auth');

