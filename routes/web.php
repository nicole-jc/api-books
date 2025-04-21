<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function() {
    return view('home');
})->name('home'); // route to return home view

Route::get('/register', function() {
    return view('users.register');
})->name('register'); // route to return register user view

Route::get('/newbook', function() {
    return view('books.newbook');
})->name('newbook'); // route to return new book view

// routes to store new user and book on DB
Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::post('/newbook', [BookController::class, 'store'])->name('book.store');

// routes to get all the users and books data
Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/books', [BookController::class, 'index'])->name('books');

// routes to return edit view with the specific user data + updating method
Route::get('/users/{user}', [UserController::class, 'show'])->name('user.edit.view'); 

Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');

// routes to return edit view with the specific book data + updating method
Route::get('/books/{book}', [BookController::class, 'show'])->name('book.edit.view');

Route::put('/books/{book}', [BookController::class, 'update'])->name('book.update');

// Routes to delete users and books
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.delete');

Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.delete');