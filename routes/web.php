<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TempatTidurController;
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

//data
Route::get('/', [AdminController::class, 'index'])->middleware('admin');
Route::get('/data_pasien', [AdminController::class, 'data_pasien'])->middleware('admin');
Route::get('/tempat_tidur', [AdminController::class, 'tempat_tidur'])->middleware('admin');
Route::get('/data_tindakan', [AdminController::class, 'data_tindakan'])->middleware('admin');


//crud pegawai
Route::get('/tambah_pegawai', [PegawaiController::class, 'tambah_pegawai'])->middleware('admin');
Route::post('/store_pegawai', [PegawaiController::class, 'store_pegawai'])->middleware('admin');
Route::post('/hapus_pegawai', [PegawaiController::class, 'hapus_pegawai'])->middleware('admin');
Route::post('/cari_pegawai', [PegawaiController::class, 'cari_pegawai']);
Route::get('/edit_pegawai/{id}', [PegawaiController::class, 'edit_pegawai']);
Route::post('/update_pegawai', [PegawaiController::class, 'update_pegawai']);

//crud pasien
Route::get('/tambah_pasien', [PasienController::class, 'tambah_pasien'])->middleware('admin');
Route::post('/store_pasien', [PasienController::class, 'store_pasien'])->middleware('admin');
Route::post('/hapus_pasien', [PasienController::class, 'hapus_pasien'])->middleware('admin');
Route::get('/edit_pasien/{id}', [PasienController::class, 'edit_pasien'])->middleware('admin');
Route::post('/update_pasien', [PasienController::class, 'update_pasien'])->middleware('admin');

//crud tempat tidur
Route::get('/tambah_tmptidur', [TempatTidurController::class, 'tambah_tmptidur'])->middleware('admin');
Route::post('/store_tmptidur', [TempatTidurController::class, 'store_tmptidur'])->middleware('admin');
Route::post('/hapus_tmptidur', [TempatTidurController::class, 'hapus_tmptidur'])->middleware('admin');
Route::get('/edit_tmptidur/{id}', [TempatTidurController::class, 'edit_tmptidur'])->middleware('admin');
Route::post('/update_tmptidur', [TempatTidurController::class, 'update_tmptidur'])->middleware('admin');
Route::post('/cari_tmptidur', [TempatTidurController::class, 'cari_tmptidur']);



//autentikasi
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store_register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_login', [AuthController::class, 'store_login']);
Route::get('/logout', [AuthController::class, 'logout']);