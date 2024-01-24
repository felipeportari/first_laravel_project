<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuppliersController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sobre', [AboutController::class, 'index'])->name('about');

Route::get('/contato', [ContactController::class, 'index'])->name('contact');

Route::get('/produtos', [ProductController::class, 'index'])->name('product');
Route::get('/produtos/{slug}', [ProductController::class, 'see'])->name('product.see');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/clientes', [CustomerController::class, 'index'])->name('customer');
Route::get('/fornecedores', [SuppliersController::class, 'index'])->name('suppliers');
Route::get('/produtos', [ProductController::class, 'index'])->name('product');
