<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ["nome"];

    public function usuarios(){
        return $this->belongsToMany("App\Models\Usuario", "usuario__empresas")->withPivot("tipo_usuario_id");
    }

    public function noticias(){
        return $this->hasMany("App\Models\Noticia");
    }

    public function contas(){
        return $this->hasMany("App\Models\Conta");
    }
}
