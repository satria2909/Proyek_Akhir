<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    #Route Tabel User
    Route::get('/create_user',[UserController::class,'create']);
    Route::post('/save_user',[UserController::class,'save']);
    Route::get('/read_user',[UserController::class,'read']);
    Route::get('/update_user/{id}',[UserController::class,'update']);
    Route::post('/edit_user',[UserController::class,'edit']);
    Route::get('/delete_user/{id}',[UserController::class,'delete']);
    Route::get('/view_user',[UserController::class,'view']);

    #Route Tabel Pelanggan
    Route::get('/create_pl',[PelangganController::class,'create']);
    Route::post('/save_pl',[PelangganController::class,'save']);
    Route::get('/read_pl',[PelangganController::class,'read']);
    Route::get('/update_pl/{id}',[PelangganController::class,'update']);
    Route::post('/edit_pl',[PelangganController::class,'edit']);
    Route::get('/delete_pl/{id}',[PelangganController::class,'delete']);
    Route::get('/view_pl',[PelangganController::class,'view']);

    #Route Tabel Buku
    Route::get('/create_bk',[BukuController::class,'create']);
    Route::post('/save_bk',[BukuController::class,'save']);
    Route::get('/read_bk',[BukuController::class,'read']);
    Route::get('/update_bk/{id}',[BukuController::class,'update']);
    Route::post('/edit_bk',[BukuController::class,'edit']);
    Route::get('/delete_bk/{id}',[BukuController::class,'delete']);
    Route::get('/view_bk',[BukuController::class,'view']);

    #Route Tabel Transaksi
    Route::get('/create_tr',[TransaksiController::class,'create']);
    Route::post('/save_tr',[TransaksiController::class,'save']);
    Route::get('/read_tr',[TransaksiController::class,'read']);
    Route::get('/update_tr/{id}',[TransaksiController::class,'update']);
    Route::post('/edit_tr',[TransaksiController::class,'edit']);
    Route::get('/delete_tr/{id}',[TransaksiController::class,'delete']);
    Route::get('/view_tr',[TransaksiController::class,'view']);
});

Route::get('/logout',[PelangganController::class,'logout']);
Route::get('/logout',[BukuController::class,'logout']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/logout',[TransaksiController::class,'logout']);

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
