<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//Libri
Route::get('/libri', [BookController::class, 'index'])->name('books.index');
Route::get('/libri/crea', [BookController::class, 'create'])->name('books.create');
Route::post('/libri/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/libri/{book}/dettagli', [BookController::class, 'show'])->name('books.show');

//Categorie
Route::post('/categorie/salva', [CategoryController::class, 'store'])->name('categories.store');

//Autori
Route::get('/autori', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/autori/crea', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/autori/salva', [AuthorController::class, 'store'])->name('authors.store');