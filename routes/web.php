<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadGcsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('product')->group(function () {
        Route::get('index', [ProductController::class, 'index'])->name('product');
        Route::get('tambah', [ProductController::class, 'tambah'])->name('product.tambah');
        Route::post('store', [ProductController::class, 'store'])->name('product.store');
        Route::delete('delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::get('product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('product/{product}', [ProductController::class, 'update'])->name('product.update');

    });
    Route::prefix('kategori')->group(function () {
        Route::get('', [KategoriController::class, 'index'])->name('kategori');
        Route::get('tambah', [KategoriController::class, 'create'])->name('kategori.tambah');
        Route::post('tambah', [KategoriController::class, 'store'])->name('kategori.tambah.store');
        Route::delete('delete/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
        Route::put('update/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    });
});

Auth::routes();
