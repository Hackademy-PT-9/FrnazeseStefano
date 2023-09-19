<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class,'index'])->name('home');
Route::resource('/books', BookController::class);
Route::resource('/authors', AuthorController::class);

