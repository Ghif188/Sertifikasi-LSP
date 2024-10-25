<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('beasiswa.pilihan');
})->name('pilih');
Route::get('/hasil', [BeasiswaController::class, 'index'])->name('hasil');
Route::get('/daftar', [BeasiswaController::class, 'create'])->name('daftar');
Route::post('/daftar/store', [BeasiswaController::class, 'store'])->name('beasiswa.store');
