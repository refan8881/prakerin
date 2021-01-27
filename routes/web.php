<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\desaController;
use App\Http\Controllers\rwController;
use App\Http\Controllers\kasusController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('provinsi',function(){
    return view('layouts.provinsi');

});
Route::get('kota',function(){
    return view('layouts.kota');

});
Route::get('kecamatan',function(){
    return view('layouts.kecamatan');

});
Route::get('desa',function(){
    return view('layouts.desa');

});
Route::get('rw',function(){
    return view('layouts.rw');
});
Route::get('kasus',function(){
    return view('layouts.kasus');
});

        



Route::group(['prefix' => 'admin', 'middleware'=>['auth']],function(){
    Route::get('/',function()
    {
            return view('admin.index');
    });

    Route::resource('provinsi',provinsiController::class);
    Route::resource('kota', KotaController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('desa', desaController::class);
    Route::resource('rw', rwController::class);
    Route::resource('kasus', kasusController::class);

});