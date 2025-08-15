<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Home1Controller::class, 'home']);

Route::get('/about', [\App\Http\Controllers\Home1Controller::class, 'about']);

Route::get('/artikel/berita', [\App\Http\Controllers\Home1Controller::class, 'artikel_berita']);

Route::get('/user', [\App\Http\Controllers\Home1Controller::class, 'user']);

Route::post('/user', function () {
    return "Halaman User | POST";
});

Route::get('/product/{id}', [\App\Http\Controllers\Home1Controller::class, 'product']);

Route::get('/product/{id}/item/{item}', function ($id, $item) {
    return "Halaman Product : " . $id . "Item :" . $item;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Home1Controller::class, 'index'])->name('home');

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [\App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [\App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [\App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [\App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/articles', \App\Http\Controllers\ArticleController::class);

Route::resource('/mobil', \App\Http\Controllers\MobilController::class);

Route::resource('/suppliers', \App\Http\Controllers\SuppliersController::class);
Route::resource('/products', \App\Http\Controllers\ProductsController::class);

Route::resource('/customers', \App\Http\Controllers\CustomersController::class);
Route::resource('/orders', \App\Http\Controllers\OrdersController::class);