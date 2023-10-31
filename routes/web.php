<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// complaints
Route::get('complaint', [App\Http\Controllers\ComplaintController::class, 'index'])->name('complaint');
Route::get('complaint-show/{id}', [App\Http\Controllers\ComplaintController::class, 'show'])->name('complaint.show');

// popular brands
Route::get('popular-brand', [App\Http\Controllers\PopularBrandController::class, 'index'])->name('popularbrand');
Route::get('popular-brand/create', [App\Http\Controllers\PopularBrandController::class, 'create'])->name('popularbrand.create');
Route::post('popular-brand/createStore', [App\Http\Controllers\PopularBrandController::class, 'createStore'])->name('popularbrand.createStore');
Route::get('popular-brand-show/{id}', [App\Http\Controllers\PopularBrandController::class, 'show'])->name('popularbrand.show');
