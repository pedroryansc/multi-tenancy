<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Empresa;
use App\Models\Usuario;
use App\Models\Empresa;
use App\Models\TipoUsuario;

use Illuminate\Http\Request;

class Usuario_EmpresaController extends Controller
{
    public function create($usuario_id){
        session_start();

        if(isset($_SESSION["usuario"])){
            $usuario = Usuario::find($usuario_id);
            $empresas = Usuario::find($_SESSION["usuario"]->id)->empresas;
            $tiposUsuario = TipoUsuario::all();

            return view("usuario_empresa.create", ["usuario"=>$usuario, "empresas"=>$empresas, "tiposUsuario"=>$tiposUsuario]);
        } else
            return redirect()->route("empresas.index");
    }

    public function store($usuario_id, Request $request){
        $usuarioEmpresa = Usuario_Empresa::where([
            ["usuario_id", $usuario_id],
            ["empresa_id", $request->input("empresa_id")]
        ]);

        if(!$usuarioEmpresa->exists()){
            $usuarioEmpresa = new Usuario_Empresa();

            $usuarioEmpresa->usuario_id = $usuario_id;
            $usuarioEmpresa->empresa_id = $request->input("empresa_id");
            $usuarioEmpresa->tipo_usuario_id = $request->input("tipo_usuario_id");

            $usuarioEmpresa->save();
        }

        return redirect()->route("usuarios.index");
    }

    public function destroy($usuario_id, $empresa_id){

    }
}
