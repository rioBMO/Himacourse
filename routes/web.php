<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'indexMhs']);
Route::get('/dosen', [DosenController::class, 'indexDosen']);

Route::get('/add_dosen', [CRUDController::class, 'form_dosen']);
Route::post('/save_dosen', [CRUDController::class, 'add_dosen']);

Route::get('/edit_dosen/{id}', [CRUDController::class, 'edit_dosen']);
Route::post('/update_dosen/{id}', [CRUDController::class, 'update_dosen']);

Route::delete('/delete_dosen/{id}', [CRUDController::class, 'delete_dosen']);

Route::get('/signin', function() {
    return view('signin'); // assuming your login form is in a view named 'login'
})->name('signin');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/registrasi-user', [AuthController::class, 'registrasi'])->name('registrasi-user');

Route::get('/signup-page', function() {
    return view('signup');
})->name('signup');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');