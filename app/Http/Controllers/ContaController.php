<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Empresa;
use App\Models\TipoConta;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($empresa_id)
    {
        $empresa = Empresa::find($empresa_id);

        return view("conta.index", ["empresa"=>$empresa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($empresa_id)
    {
        $tiposConta = TipoConta::all();

        return view("conta.create", ["empresa_id"=>$empresa_id, "tiposConta"=>$tiposConta]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($empresa_id, Request $request)
    {
        $conta = new Conta();

        $conta->valor = $request->input("valor");
        $conta->descricao = $request->input("descricao");
        $conta->tipo_conta_id = $request->input("tipo_conta_id");
        $conta->data = $request->input("data");
        $conta->empresa_id = $empresa_id;

        $conta->save();

        return redirect()->route("contas.index", ["empresa_id"=>$empresa_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($empresa_id, $conta_id)
    {
        $conta = Conta::find($conta_id);

        $conta->delete();

        return redirect()->route("contas.index", ["empresa_id"=>$empresa_id]);
    }
}
