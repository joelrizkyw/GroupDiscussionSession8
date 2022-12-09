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

Route::get("/mahasiswas", [MahasiswaController::class, "index"])
    ->name("home-mahasiswa");

Route::get("/mahasiswas/{mahasiswaId}", [MahasiswaController::class, "detailMahasiswa"]);


Route::post("/mahasiswas/insertData", [MahasiswaController::class, "insertData"])
    ->name("insert-data");

Route::get("/mahasiswas/updateMahasiswa/{mahasiswaId}", [MahasiswaController::class, "updateMahasiswa"])->name("update-mahasiswa");

Route::patch("/mahasiswas/updateData/{mahasiswaId}", [MahasiswaController::class, "updateData"])
    ->name("update-data");

Route::delete("/mahasiswas/deleteData/{mahasiswaId}", [MahasiswaController::class, "deleteData"])
    ->name("delete-data");
