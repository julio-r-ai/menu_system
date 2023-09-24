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
Route::get('/edit/{id}', [AdminController::class, 'edit']); 
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/loginForm', [AdminController::class, 'loginForm']);

Route::post('/admin', [AdminController::class, 'store']);
Route::post('/admin/auth', [AdminController::class, 'auth']);

Route::delete('/admin/{id}', [AdminController::class, 'destroy']);      
Route::get('/showProduto/{id}', [AdminController::class, 'showProduto']);
Route::put('/edit/{id}', [AdminController::class, 'update']);

