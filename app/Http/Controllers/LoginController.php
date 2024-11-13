<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Usuario;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        $empresas = Empresa::all();

        return view("login", ["empresas"=>$empresas]);
    }

    public function verificarLogin(Request $request){
        $usuario = Usuario::where([
            ["empresa_id", $request->input("empresa_id")],
            ["username", $request->input("username")],
            ["senha", $request->input("senha")]
        ])->get();

        if(count($usuario) > 0){
            session_start();
            $_SESSION["usuario"] = json_decode($usuario)[0];

            return redirect()->route("empresas.index");
        } else
            return redirect()->route("login");
    }

    public function sair(){
        session_start();

        session_unset();
        session_destroy();

        return redirect()->route("empresas.index");
    }

}
