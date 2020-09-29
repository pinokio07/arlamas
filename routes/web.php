<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::get('/weblogin', [\App\Http\Controllers\AuthController::class, 'index']);
Route::post('/postlogin', [\App\Http\Controllers\AuthController::class, 'postlogin']);
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/tentang', [\App\Http\Controllers\TentangController::class, 'tentang']);
Route::get('/hubungi', [\App\Http\Controllers\HubungiController::class, 'hubungi']);
Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'gallery']);
Route::get('/brosur', [\App\Http\Controllers\BrosurController::class, 'brosur']);
Route::get('/darat', [\App\Http\Controllers\ServiceController::class, 'darat']);

Route::group(['middleware' => ['auth']], function () {
    Route::post('/tambahpegawai', [\App\Http\Controllers\TentangController::class, 'tambahpegawai']);
    Route::get('/getpegawai/{pegawai}', [\App\Http\Controllers\TentangController::class, 'getpegawai']);
    Route::post('/editpegawai/{pegawai}', [\App\Http\Controllers\TentangController::class, 'editpegawai']);

    Route::post('/tambahfoto', [\App\Http\Controllers\GalleryController::class, 'tambahfoto']);
    Route::get('/hapusfoto', [\App\Http\Controllers\GalleryController::class, 'hapusfoto']);

    Route::post('/uploadvideo', [\App\Http\Controllers\GalleryController::class, 'uploadvideo']);
    Route::get('/hapusvideo', [\App\Http\Controllers\GalleryController::class, 'hapusvideo']);
});


