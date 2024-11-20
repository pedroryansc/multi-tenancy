<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\Usuario_EmpresaController;

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

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "verificarLogin"])->name("verificarLogin");
Route::get("/sair", [LoginController::class, "sair"])->name("sair");

Route::resource("/empresas", EmpresaController::class);

Route::resource("/usuarios", UsuarioController::class);

Route::resource("/usuarios/{usuario_id}/usuarioEmpresa", Usuario_EmpresaController::class);

Route::resource("/empresas/{empresa_id}/noticias", NoticiaController::class);

Route::resource("/empresas/{empresa_id}/contas", ContaController::class);

Route::get("/", function(){
    return redirect("/empresas");
});
