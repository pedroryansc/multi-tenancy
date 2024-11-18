<?php

namespace Database\Seeders;

use App\Models\TipoConta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposConta = [
            ["descricao" => "Crédito"],
            ["descricao" => "Débito"]
        ];

        foreach($tiposConta as $tipoConta)
            TipoConta::create($tipoConta);
    }
}
