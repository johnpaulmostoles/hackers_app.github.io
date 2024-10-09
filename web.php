<?php

use App\Models\Brands;
use App\Http\Controllers\BrandsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/brands/create',[BrandsController::class, 'create'])->name('brands.create');
Route::post('/brands',[BrandsController::class, 'store'])->name('brands.store');
Route::get('/brands/index',[BrandsController::class, 'index'])->name('brands.index');