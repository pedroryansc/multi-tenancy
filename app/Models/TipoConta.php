<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConta extends Model
{
    use HasFactory;

    protected $fillable = ["descricao"];

    public function contas(){
        return $this->hasMany("App\Models\Conta");
    }
}
