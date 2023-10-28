<?php

use App\Http\Controllers\Article\ArticleController;
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

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/article/{articleId}', [ArticleController::class, 'show'])->name('article.show');;

Route::get('/new', [ArticleController::class, 'create'])->name('article.new');

Route::post('/article', [ArticleController::class, 'store']);
