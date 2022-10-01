<?php

namespace App\Http\Controllers;
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

Route::get("/", [KendaraanController::class, "index"]);
Route::get("/laporan", [KendaraanController::class, "laporan_penjualan"])->name("laporan_penjualan");
Route::get("/tambah_mobil", [KendaraanController::class, "tambah_mobil"])->name("tambah_mobil");
Route::get("/tambah_motor", [KendaraanController::class, "tambah_motor"])->name("tambah_motor");
Route::resource("/tambah_mobil", MobilController::class);
Route::resource("/tambah_motor", MotorController::class);
