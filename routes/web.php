<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/add', [ArticleController::class, 'add'])->name('articles.add');
Route::post('store', [ArticleController::class, 'store'])->name('articles.create');
Route::get('edit/{id}', [ArticleController::class, 'edit']);
Route::post('update', [ArticleController::class, 'update']);
Route::get('delete/{id}', [ArticleController::class, 'destroy']);
Route::get('show/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('add_comment', [ArticleController::class, 'addComment']);
Route::get('show/{id}/delete', [ArticleController::class, 'destroyComment']);


