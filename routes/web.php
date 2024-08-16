<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/articles', ArticleController::class);
    // In your routes/web.php
    Route::get('/articles/category/{category}', [ArticleController::class, 'filterByCategory'])->name('articles.filterByCategory');
});

require __DIR__ . '/auth.php';

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
