<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PdvController,
    CaixaController,
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->name('admin.')->group(function(){

    Route::get('/caixa', [CaixaController::class, 'index'])->name('caixa.index');
    Route::post('/caixa/abrir', [CaixaController::class, 'pdv'])->name('caixa.abrir');

    Route::get('/pdv', [PdvController::class, 'index'])->name('pdv.index');
    Route::get('/pdv/criar', [PdvController::class, 'criar'])->name('pdv.criar');
    Route::post('/pdv', [PdvController::class, 'salvar'])->name('pdv.salvar');
    Route::get('/pdv/{id}/mostrar', [PdvController::class, 'mostrar'])->name('pdv.mostrar');
    Route::get('/pdv/{id}', [PdvController::class, 'editar'])->name('pdv.editar');
    Route::put('/pdv/{id}', [PdvController::class, 'atualizar'])->name('pdv.atualizar');
    Route::delete('/pdv/{id}', [PdvController::class, 'deletar'])->name('pdv.deletar');
});
