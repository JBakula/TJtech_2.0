<?php

use App\Models\Kategorija;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProizodiController;
use App\Http\Controllers\KategorijeContoller;

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

Route::get('/', [KategorijeContoller::class,'index']);
Route::get('/proizvodi/{id}',[ProizodiController::class,'index'])->name('prikazProizvoda');
