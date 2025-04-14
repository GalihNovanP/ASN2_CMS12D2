<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/karyawans', [KaryawanController::class, 'index']);
Route::get('/karyawans/{id}', [KaryawanController::class, 'show']);
Route::get('/karyawans/{id}/edit', [KaryawanController::class, 'edit']);
Route::patch('/karyawans/{id}', [KaryawanController::class, 'update']);
Route::get('/karyawans/{id}/delete', [KaryawanController::class, 'delete']);
Route::delete('/karyawans/{id}', [KaryawanController::class, 'destroy']);
Route::get('/', function () {
    return view('welcome');
});
