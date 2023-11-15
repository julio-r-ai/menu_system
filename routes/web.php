<?php

use Illuminate\Support\Facades\Route; 

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\LoginController; 
 
Route::get('/', [ProductController::class, 'cerveja']);
Route::get('/coquetel', [ProductController::class, 'coquetel']);
Route::get('/diverso', [ProductController::class, 'diverso']);
Route::get('/drinks', [ProductController::class, 'drinks']);
Route::get('/energetico', [ProductController::class, 'energetico']);
Route::get('/petisco', [ProductController::class, 'petisco']);
Route::get('/refrigerante', [ProductController::class, 'refrigerante']);
Route::get('/sobremesa', [ProductController::class, 'sobremesa']);
Route::get('/suco', [ProductController::class, 'suco']);
Route::get('/sushi', [ProductController::class, 'sushi']);
Route::get('/vinho', [ProductController::class, 'vinho']);
Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware('auth'); 
Route::get('/addProduct', [ProductController::class, 'addProduct'])->middleware('auth');
Route::get('/loading', [ProductController::class, 'loading']);

Route::post('/admin', [ProductController::class, 'store'])->middleware('auth');

Route::delete('/admin/{id}', [ProductController::class, 'destroy'])->middleware('auth');      
Route::get('/showProduto/{id}', [ProductController::class, 'showProduto']);
Route::put('/edit/{id}', [ProductController::class, 'update'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', [ProductController::class, 'admin'])->name('admin');
});
