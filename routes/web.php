<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Article\ArticleController;

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
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::resource('articles', ArticleController::class);

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
// Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
// Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
// Route::get('/articles/show/{id}', [ArticleController::class, 'show'])->name('articles.show');
// Route::post('/articles/update/{id}', [ArticleController::class, 'update'])->name('articles.update');
// Route::post('/articles/destroy/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
