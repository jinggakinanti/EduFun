<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

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

Route::prefix('/edufun')->group(function(){
    Route::get('/home', [HomeController::class,'view'])->name('home.page');

    Route::get('/category/{id}', [CategoryController::class,'view'])->name('category.page');

    Route::get('/writer', [WriterController::class,'view'])->name('writer.page');

    Route::get('/aboutus', [AboutUsController::class,'view'])->name('aboutus.page');

    Route::get('/popular', [PopularController::class,'view'])->name('popular.page');

    Route::get('/article/{id}', [ArticleController::class,'view'])->name('article.page');

    Route::get('/writer/{id}', [WriterController::class,'detail'])->name('writerDetail.page');
});
