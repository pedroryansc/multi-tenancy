<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Empresa;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Conta $conta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conta $conta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conta $conta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conta $conta)
    {
        //
    }
}
