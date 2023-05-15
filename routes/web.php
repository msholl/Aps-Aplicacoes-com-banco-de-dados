<?php

use App\Http\Controllers\ProdutoController;
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

Route::get('/produtos', [ProdutoController::class, 'index'])
    ->name('produtos.index');

Route::get('/produto/adicionar', [ProdutoController::class, 'create'])
    ->name('produtos.create');

Route::post('/produto/adicionar', [ProdutoController::class, 'store'])
    ->name('produtos.store');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])
    ->name('produtos.show');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
    ->name('produtos.destroy');
