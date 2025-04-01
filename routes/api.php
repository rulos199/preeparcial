<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::put('/books/{book}', [BookController::class, 'update']);
Route::apiResource('books', BookController::class);
Route::apiResource('categories', CategoryController::class);
Route::get('categories/active', [CategoryController::class, 'activeWithBooks']);