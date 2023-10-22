<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClienteController;

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/menu',[MenuController::class,'menu_GET']);

//Listar
Route::get('/menu/clientes/index',[ClienteController::class,'index_GET']);

//Registrar
Route::get('/menu/clientes/create',[ClienteController::class,'create_GET']);
Route::post('/menu/clientes/index',[ClienteController::class,'store_POST'])->name('clientes.store');

//Editar
Route::get('/menu/clientes/{cliente}/edit',[ClienteController::class,'edit_GET'])->name('clientes.edit');
Route::put('/menu/clientes/{cliente}/index',[ClienteController::class,'update_PUT'])->name('clientes.update');

//Eliminar
Route::get('/menu/clientes/{cliente}/delete',[ClienteController::class,'delete_GET'])->name('clientes.delete');
Route::delete('/menu/clientes/{cliente}',[ClienteController::class,'destroy_DELETE'])->name('clientes.destroy');