<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CollectionController;

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
    return view('home');
})->middleware(['verify.shopify'])->name('home');


//Collection Route
Route::get('/collection',[CollectionController::class,'index'])->middleware(['verify.shopify'])->name('collection.index');
Route::get('/product/view/{id}',[CollectionController::class,'productIndex'])->middleware(['verify.shopify'])->name('product.view');
Route::get('/collection/edit/{id}',[CollectionController::class,'edit'])->middleware(['verify.shopify'])->name('collection.edit');
Route::post('/collection/store',[CollectionController::class,'store'])->middleware(['verify.shopify'])->name('collection.store');
Route::post('/collection/update',[CollectionController::class,'update'])->middleware(['verify.shopify'])->name('collection.update');

//Product Route

Route::get('/product',[ProductController::class,'index'])->middleware(['verify.shopify'])->name('product.index');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->middleware(['verify.shopify'])->name('product.edit');
Route::post('/product/store',[ProductController::class,'store'])->middleware(['verify.shopify'])->name('product.store');
Route::post('/product/update',[ProductController::class,'update'])->middleware(['verify.shopify'])->name('product.update');