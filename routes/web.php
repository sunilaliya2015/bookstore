<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [BookController::class, 'indexFront'])->name('welcome');


Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('home');
Route::get('book/add', [BookController::class, 'create']);
Route::post('add', [BookController::class, 'store'])->name('add');
Route::get('books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::post('books/{id}', [BookController::class, 'update'])->name('books.update');
Route::get('books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');