<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog;

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

Route::get('/', [App\Http\Controllers\Homepage::class, 'homepage'])->name('homepage');

Route::get('/catalogo', [Catalog::class, 'catalog'])->name('catalog');

Route::get('/prodotto/{id}', [Catalog::class, 'product'])->name('product');

Route::get('/catalogo/categoria/{category}', [Catalog::class, 'category'])->name('category');