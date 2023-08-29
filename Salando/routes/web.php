<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get('/',[ShopController::class, 'index'])->name('index');
Route::get('/contacts',[ShopController::class, 'contacts'])->name('contacts');
Route::post('/send',[ShopController::class, 'sendEmail'])->name('send');