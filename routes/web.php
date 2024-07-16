<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/data', [BerandaController::class, 'view']);
Route::get('/tambah', [BerandaController::class, 'tambah']);
Route::get('/simpan', [BerandaController::class, 'simpan']);
Route::get('/update/{id}', [BerandaController::class, 'update']);
Route::get('/edit/{id}', [BerandaController::class, 'edit']);
Route::get('/delete/{id}', [BerandaController::class, 'delete']);

//login
Route::get('/login', [LoginController::class, 'view']);
Route::get('/cek_login', [LoginController::class, 'cek_login']);
