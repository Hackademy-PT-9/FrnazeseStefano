<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

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
Route::get('/', [MediaController::class, 'index'])->name('home');
Route::get('/catalogo/{tipologia}', [MediaController::class, 'catalogue'])->name('catalogue');
Route::get('/dettaglio-film/{uri}', [MediaController::class, 'detail'])->name('detail');


