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
            ["username", $request->input("username")],
            ["senha", $request->input("senha")]
        ])->get();

        if(filled($usuario)){

            $usuario = $usuario[0];

            for($i = 0; $i < count($usuario->empresas); $i++){
                if($usuario->empresas[$i]->id == $request->input("empresa_id")){
                    session_start();

                    $_SESSION["usuario"] = json_decode($usuario);
                    $_SESSION["empresa"] = json_decode($usuario->empresas[$i]);
                    $_SESSION["tipo_usuario_id"] = json_decode($usuario->empresas[$i]->pivot->tipo_usuario_id);

                    return redirect()->route("empresas.index");
                }
            }
        }

        return redirect()->route("login");
    }

    public function sair(){
        session_start();

        session_unset();
        session_destroy();

        return redirect()->route("empresas.index");
    }

}
