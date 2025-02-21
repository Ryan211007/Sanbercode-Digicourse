<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('/table', function () {
    return view('table');
})->name('table');

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');

Route::resource('cast', CastController::class);