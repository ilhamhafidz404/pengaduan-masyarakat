<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;

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
    return view('welcome');
});

Route::get('/login-masyarakat', [AuthController::class, 'view_login'])->name('login.masyarakat');
Route::post('/login-masyarakat', [AuthController::class, 'do_login'])->name('login.masyarakat');
Route::get('/register-masyarakat', [AuthController::class, 'view_register'])->name('register.masyarakat');
Route::post('/register-masyarakat', [AuthController::class, 'do_register'])->name('register.masyarakat');

Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
