<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposUsuario = [
            ["descricao" => "Administrador"],
            ["descricao" => "Comum"]
        ];

        foreach($tiposUsuario as $tipoUsuario)
            TipoUsuario::create($tipoUsuario);
    }
}
