<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
