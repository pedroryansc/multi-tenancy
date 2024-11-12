<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\TipoUsuario;
use App\Models\Empresa;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view("usuario.index", ["usuarios"=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposUsuario = TipoUsuario::all();
        $empresas = Empresa::all();

        return view("usuario.create", ["tiposUsuario"=>$tiposUsuario, "empresas"=>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input("tipo_usuario_id") != "" && $request->input("empresa_id") != "" &&
        $request->input("senha") == $request->input("confirmarSenha")){
            $usuario = new Usuario();

            $usuario->nome = $request->input("nome");
            $usuario->username = $request->input("username");
            $usuario->senha = $request->input("senha");
            $usuario->tipo_usuario_id = $request->input("tipo_usuario_id");
            $usuario->empresa_id = $request->input("empresa_id");

            $usuario->save();
        }

        return redirect()->route("usuarios.index");
    }
}
