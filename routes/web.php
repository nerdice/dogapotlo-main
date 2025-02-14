<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/books', [BookController::class, 'index'])->middleware('auth')->name('index.index');
Route::get('books/{id}', [BookController::class, 'show'])->middleware('auth')->name('index.show');
Route::get('/borrowings', [BorrowingsController::class, 'index'])->middleware([AdminMiddleware::class])->name('borrowings.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
