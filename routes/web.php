<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get("/mahasiswas", [MahasiswaController::class, "index"]);

Route::get("/mahasiswas/{mahasiswaId}", [MahasiswaController::class, "detailMahasiswa"]);

Route::get("/mahasiswas/insertMahasiswa", [MahasiswaController::class, "insertMahasiswa"]);

Route::post("/mahasiswas/insertData", [MahasiswaController::class, "insertData"]);

Route::get("/mahasiswas/updateMahasiswa/{mahasiswaId}", [MahasiswaController::class, "updateMahasiswa"]);

Route::patch("/mahasiswas/updateData/{mahasiswaId}", [MahasiswaController::class, "updateData"]);

Route::delete("/mahasiswas/deleteData/{mahasiswaId}", [MahasiswaController::class, "deleteData"]);
