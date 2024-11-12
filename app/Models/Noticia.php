<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ["titulo", "subtitulo", "texto", "usuario_id", "empresa_id"];

    public function usuario(){
        return $this->belongsTo("App\Models\Usuario");
    }

    public function empresa(){
        return $this->belongsTo("App\Models\Empresa");
    }
}
