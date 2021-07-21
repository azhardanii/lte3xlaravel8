<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();
Route::get('/', [DashboardController::class, 'index']);

Route::group(['middleware' => ['auth', 'role:0,1']], function() {
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/detail_guru/{guru:nama_guru}', [GuruController::class, 'detail']);
    Route::get('/tambah_guru', [GuruController::class, 'tambah']);
    Route::post('/tambah_data_guru', [GuruController::class, 'tambah_data_guru']);
    Route::get('/ubah_guru/{guru:nama_guru}', [GuruController::class, 'ubah']);
    Route::post('/ubah_data_guru/{guru:nama_guru}', [GuruController::class, 'ubah_data_guru']);
    Route::get('/hapus_data_guru/{data:nama_guru}', [GuruController::class, 'hapus']);
});

Route::group(['middleware' => ['auth', 'role:0,2']], function() {
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/cetak', [CetakController::class, 'index']);
    Route::get('/cetakpdf', [CetakController::class, 'pdf']);
});