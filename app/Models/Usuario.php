<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "username", "senha", "tipo_usuario_id", "empresa_id"];

    public function tipoUsuario(){
        return $this->belongsTo("App\Models\TipoUsuario");
    }

    public function empresa(){
        return $this->belongsTo("App\Models\Empresa");
    }

    public function noticias(){
        return $this->hasMany("App\Models\Noticia");
    }
}
