<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Empresa;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($empresa_id)
    {
        $empresa = Empresa::find($empresa_id);

        return view("noticia.index", ["empresa"=>$empresa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($empresa_id)
    {
        return view("noticia.create", ["empresa"=>$empresa_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();

        $noticia->titulo = $request->input("titulo");
        $noticia->subtitulo = $request->input("subtitulo");
        $noticia->texto = $request->input("texto");
        $noticia->usuario_id = 1;
        $noticia->empresa_id = 1;

        $noticia->save();

        return redirect()->route("noticias.index", ["empresa_id"=>1]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        //
    }
}
