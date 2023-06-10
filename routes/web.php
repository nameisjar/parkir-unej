<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});


Route::middleware(['auth'])->group(function () {
    // Route-rute yang memerlukan autentikasi di sini
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // ...
    Route::get('/', function () {
        return view('dashboard');
    });
});


route::get('/signin', [UserController::class, 'index'])->name('signin_index');
route::post('/signin-post', [UserController::class, 'store'])->name('signin_post');



route::get('/logout', [UserController::class, 'logout'])->name('logout');
