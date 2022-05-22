<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\RidaAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RidaAppController::class, 'index'])->name('rida.index');
Route::get('/app', [RidaAppController::class, 'app'])->name('rida.app');

Route::get('/dashboard', [UserController::class, 'index'])
	->middleware(['auth'])->name('dashboard.index');
Route::get('/dashboard/edit', [UserController::class, 'edit'])
	->middleware(['auth'])->name('dashboard.edit');
Route::put('/dashboard/edit', [UserController::class, 'update'])
	->middleware(['auth'])->name('dashboard.update');

Route::get('/data_pegawai', [DataPegawaiController::class, 'index'])
	->middleware(['auth'])->name('data_pegawai.index');
Route::get('/data_pegawai/create', [DataPegawaiController::class, 'create'])
	->middleware(['auth'])->name('data_pegawai.create');
Route::post('/data_pegawai/create', [DataPegawaiController::class, 'insert'])
	->middleware(['auth'])->name('data_pegawai.insert');
Route::get('/data_pegawai/edit/{id}', [DataPegawaiController::class, 'edit'])
	->middleware(['auth'])->name('data_pegawai.edit');
Route::put('/data_pegawai/update/{id}', [DataPegawaiController::class, 'update'])
	->middleware(['auth'])->name('data_pegawai.update');
Route::get('/data_pegawai/delete/{id}', [DataPegawaiController::class, 'delete'])
	->middleware(['auth'])->name('data_pegawai.delete');

require __DIR__.'/auth.php';
