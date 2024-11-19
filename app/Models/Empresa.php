<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ["nome"];

    public function usuarios(){
        return $this->hasMany("App\Models\Usuario");
    }

    public function noticias(){
        return $this->hasMany("App\Models\Noticia");
    }

    public function contas(){
        return $this->hasMany("App\Models\Conta");
    }
}
