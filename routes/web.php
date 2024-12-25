<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

Route::get('/biodata',[HomeController::class, 'biodata']);

Route::post('/send',[HomeController::class, 'send']);

Route::get('/master', function(){return view('layout.master');
});

Route::get('/data-table', function() {
    return view('halaman.table');
}); 

//crud kategori

//create

//from tambah kategori

Route::get('/kategori/create',[KategoriController::class, 'create']);
//untuk kirim data ke database atau tambah data ke database
Route::post('/kategori/store', [KategoriController::class, 'store']);

//read
//tampil semua sewa
Route::get('/kategori', [KategoriController::class, 'index']);
//detail kategori berdasarkan id
//Route::get('/kategori/{kategori_id}',[KategoriController::class, 'show']);
Route::get('/kategori/{id}', [KategoriController::class, 'show']);

//update
//form update kategori
Route::get('/kategori/{kategori_id}/edit', [KategoriController::class,'edit']);

//update
//form update kategori
Route::put('/kategori/{kategori_id}', [KategoriController::class, 'update']);

//delete
//delet berdasarkan ID
Route::delete('/kategori/{kategori_id}', [KategoriController::class, 'destroy']);
