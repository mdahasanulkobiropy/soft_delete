<?php

use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class,'index'])->name('index.product');
Route::get('/trash',[ProductController::class,'trash'])->name('trash.product');
Route::get('/create',[ProductController::class,'create'])->name('create.product');
Route::post('/store',[ProductController::class,'store'])->name('store.product');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete.product');
Route::get('/forcedelete/{id}',[ProductController::class,'forcedelete'])->name('forcedelete.product');
Route::get('/restore/{id}',[ProductController::class,'restore'])->name('restore.product');
