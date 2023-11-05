<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('home.dashboard');
});

Route::get('/',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('postLogin',[LoginController::class,'login']);
Route::get('logout',[LoginController::class,'logout']);


Route::get('user', [UserController::class, 'index']) ;
Route::get('user/tambah' ,[UserController::class, 'create']);
Route::post('user/simpan' ,[UserController::class, 'store']);
Route::get('user/edit/{id}',[UserController::class,'show']);
Route::post('user/update/{id}',[UserController::class,'update']);
Route::get('user/delete/{id}',[UserController::class,'destroy']);


Route::get('barang',[BarangController::class,'index']);
Route::get('barang/tambah', [BarangController::class,'create']);
Route::post('barang/simpan',[BarangController::class,'store']);
Route::get('barang/edit/{id}',[BarangController::class,'show']);
Route::post('barang/update/{id}',[BarangController::class,'update']);
Route::get('barang/delete/{id}',[BarangController::class,'destroy']);

Route::get('suplier',[SuplierController::class,'index']);
Route::get('suplier/tambah',[SuplierController::class,'create']);
Route::post('suplier/simpan',[SuplierController::class,'store']);
Route::get('suplier/edit/{id}',[SuplierController::class,'show']);
Route::post('suplier/update/{id}',[SuplierController::class,'update']);
