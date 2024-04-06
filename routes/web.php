<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', [BookController::class, 'create'])->name('book.create');

Route::get('/books', [BookController::class, 'index'])->name('book.index');

Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');

Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::post('/books', [BookController::class, 'store'])->name('book.store');

Route::put('/books/{id}', [BookController::class, 'update'])->name('book.update');
