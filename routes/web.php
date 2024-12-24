<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\TableController;



Route::resource('readers', ReaderController::class);
Route::resource('books',BookController::class);
Route::resource('borrows',BorrowController::class);
