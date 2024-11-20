<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\TipoUsuario;
use App\Models\Empresa;
use App\Models\Usuario_Empresa;

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
        return view("usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input("senha") == $request->input("confirmarSenha")){
            $usuario = new Usuario();

            $usuario->nome = $request->input("nome");
            $usuario->username = $request->input("username");
            $usuario->senha = $request->input("senha");

            $usuario->save();
        }

        return redirect()->route("usuarios.index");
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();

        return redirect()->route("usuarios.index");
    }
}
