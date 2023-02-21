<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Models\Product;
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

Route::get('/', [PublicController::class,'home'])->name('homepage');

//? rotta che ci porta la form
Route::get('/contattaci', [PublicController::class, 'contacts'])->name('contacts');

//?rotta post per i dati del form
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');


Route::get('/product/create' , [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/brand/{brand}', [ProductController::class , 'getProductByBrand'])->name('product.brand');


Route::get('/article/create' , [ArticleController::class , 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/show.article', [ArticleController::class , 'show'])->name('article.show');