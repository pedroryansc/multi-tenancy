<?php

namespace Database\Seeders;

use App\Models\Usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            ["nome" => "O cara lá de cima", "username" => "admin", "senha" => "1234"],
            ["nome" => "O outro cara", "username" => "outroAdmin", "senha" => "abcd"]
        ];

        foreach($usuarios as $usuario)
            Usuario::create($usuario);
    }
}
