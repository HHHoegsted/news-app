<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article');
Route::post('/article', [ArticleController::class, 'store'])->name('create_article');
Route::post('/article/{id}/update', [ArticleController::class, 'update'])->name('update_article');


Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});
