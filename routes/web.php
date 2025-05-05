<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn ()=> view('home'))->name('home');
Route::get('/document', fn () => view('form'))
    ->name('document.form');
Route::post('/document', [DocumentController::class, 'store'])
    ->name('document.store');

