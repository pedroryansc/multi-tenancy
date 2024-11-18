<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $fillable = ["valor", "descricao", "tipo_conta_id", "data"];

    public function tipoConta(){
        return $this->belongsTo("App\Models\TipoConta");
    }
}
