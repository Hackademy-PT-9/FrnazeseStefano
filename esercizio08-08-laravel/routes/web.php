<?php

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
    return view('welcome');
})->name('home');

Route::get('/stringa', function () {
    return 'Sono una stringa';
})->name('stringa');

Route::get('/intero', function () {
    return 42;
})->name('intero');

Route::get('/elemento-array', function () {
    $array = [1, 2, 99, 4, 5];
    return $array[2]; 
})->name('array');


Route::get('/about', function () {
   return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
 })->name('contacts');