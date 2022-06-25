<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KomentarPostController;
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


/**
 * Middleware Auth
 */
Route::middleware(['auth'])->group(function () {
    /* Route Resource */
    Route::resource('user', UserController::class);
    Route::resource('kelas', KelasController::class);
    /* Route Method */
    Route::post('/komentarPost', [KomentarPostController::class, 'store'])->name('komentar.post');
    /* Route Controller */
    Route::controller(AutentikasiController::class)->group(function () {
        Route::post('/logout', 'actLogout');
    });

    /* Route Function */
    Route::get('/admin', function () {
        return view('layouts.admin.main');
    });

    Route::get('/kelas-list', function () {
        return view('user.kelas.list');
    });

    Route::get('/tugas', function () {
        return view('user.tugas.index');
    });

    Route::get('/member', function () {
        return view('user.kelas.anggota');
    });

    Route::get('/dashboard', function () {
        return view('user.dashboard.index');
    });
});


/**
 * Middleware Guest
 */
Route::middleware(['guest'])->group(function () {
    /* Route Function */
    Route::get('/autentikasi', function () {
        return view('user.login');
    })->name('login');

    /* Route Controller */
    Route::controller(AutentikasiController::class)->group(function() {
        Route::post('/login', 'actLogin');
        Route::post('/register', 'actRegister');
    });
});
