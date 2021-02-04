<?php


use App\Models\Provinsi;
use App\Models\Kasus;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Desa;
use App\Models\Rw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hari', [ProvinsiController::class,'hari']);
Route::get('/indo', [ProvinsiController::class,'indonesia']);
Route::get('/provinsi1/{id}', [ProvinsiController::class,'provinsi']);
Route::get('/provinsi2', [ProvinsiController::class,'provinsi1']);
Route::get('/kota', [ProvinsiController::class,'kota']);
Route::get('/kecamatan', [ProvinsiController::class,'kecamatan']);
Route::get('/desa', [ProvinsiController::class,'desa']);

// API Provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);