<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "username", "senha"];

    public function empresas(){
        return $this->belongsToMany("App\Models\Empresa", "usuario__empresas")->withPivot("tipo_usuario_id");
    }

    public function tipoUsuario(){
        return $this->belongsToMany("App\Models\TipoUsuario", "usuario__empresas")->orderByPivot("empresa_id");
    }

    public function noticias(){
        return $this->hasMany("App\Models\Noticia");
    }
}
