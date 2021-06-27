<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanMasukController;
use App\Http\Controllers\DeskripsiSistemController;
use App\Http\Controllers\KendaraanKeluarController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('layouts.layout.master');
});

Route::resource('dashboard', DashboardController::class);

Route::resource('kendaraanmasuk', KendaraanMasukController::class);
Route::resource('deskripsi', DeskripsiSistemController::class);
Route::resource('KendaraanKeluar', KendaraanKeluarController::class);
Route::get('/export_kendaraanmasuk', [App\Http\Controllers\KendaraanMasukController::class, 'exportPdf']);
Route::get('/export_kendaraankeluar', [App\Http\Controllers\KendaraanKeluarController::class, 'exportPdf']);
// Route::get('/export_alldata', [App\Http\Controllers\DashboardController::class, 'exportPdf']);