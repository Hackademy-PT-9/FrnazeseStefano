<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    $services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    return view('services', ['services' => $services]);
})->name('services');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');