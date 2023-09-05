<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/',[BookController::class,'index'])->name('home');
Route::get('/create',[BookController::class,'create'])->name('create');
Route::post('/store',[BookController::class,'store'])->name('store');
Route::get('/show/{id}', [BookController::class, 'show'])->name('show');

