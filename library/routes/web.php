<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/',[BookController::class,'index'])->name('home');
Route::get('/create',[BookController::class,'create'])->name('create');
Route::post('/store',[BookController::class,'store'])->name('store');
Route::get('/show/{book}', [BookController::class, 'show'])->name('show');
Route::get('/edit/{book}',[BookController::class,'edit'])->name('edit');
Route::post('/update{book}',[BookController::class,'update'])->name('update');
Route::post('/destroy/{book}',[BookController::class,'destroy'])->name('destroy');

