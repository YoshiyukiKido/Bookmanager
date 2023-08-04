<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('/login');
});

Route::get('/dashboard', function () {
    //return view('dashboard');
    return redirect('book');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    //return view('dashboard');
    return redirect('book');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::any('/book/search', [BookController::class, 'search'])->name('book.search');
    Route::any('/book/add', [BookController::class, 'add'])->name('book.add');
    Route::any('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::any('/book/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::any('/category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::any('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::any('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});

require __DIR__.'/auth.php';
