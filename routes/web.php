<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NoticiaController;

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

Route::resource("/empresas", EmpresaController::class);

Route::resource("/usuarios", UsuarioController::class);

Route::resource("/empresas/{empresa_id}/noticias", NoticiaController::class);

Route::get("/", function(){
    return redirect("/empresas");
});