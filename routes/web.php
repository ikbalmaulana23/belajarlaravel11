<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerpustakaanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [UserController::class, 'about']);
Route::get('perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('pinjambuku', [PerpustakaanController::class, 'pinjam']);
Route::post('pinjambuku', [PerpustakaanController::class, 'pinjambuku'])->name('pinjambukuperpus');
