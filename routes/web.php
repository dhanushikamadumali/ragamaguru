<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\dashboardController;
use App\Http\Controllers\TreatementController;

Route::get('/', function () {
    // return view('frontend.home');
});

Auth::routes();

Route::get('/Treatement', [App\Http\Controllers\TreatementController::class, 'index'])->name('Treatement');

Route::resource('Treatement', TreatementController::class);
