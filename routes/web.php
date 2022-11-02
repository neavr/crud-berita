<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{BeritaController,KontakController,PeopleController};


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


Route::get('/berita', [BeritaController::class,'index']);
Route::post('/berita/create', [BeritaController::class,'create'])->name('berita.create');
Route::post('/berita/update/{id}', [BeritaController::class,'update'])->name('berita.update');
Route::get('/berita/delete/{id}', [BeritaController::class,'delete'])->name('berita.delete');
Route::get('/people', [PeopleController::class,'index']);
Route::get('/kontak', [KontakController::class,'index']);
