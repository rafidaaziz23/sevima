<?php

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

Route::get('/admin', function () {
    return view('layouts.admin.main');
});

Route::get('/kelas-forum', function () {
    return view('user.kelas.index');
});

// Route::get('/user', function () {
//     return view('admin.user.index');
// });

Route::resource('user', UserController::class);

