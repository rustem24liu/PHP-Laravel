<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticleController;

Route::get('/', [PageController::class, 'main'])->name('articles');
Route::get('/articles', [ArticleController::class, 'index'])->name('table');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('create-article');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store'); // Сохранение статьи
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show'); // Просмотр статьи
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit'); // Форма редактирования
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update'); // Обновление статьи
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy'); // Удаление статьи

//Route::resource('articles', ArticleController::class);

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
