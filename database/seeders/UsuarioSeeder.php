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
        $usuario = ["nome" => "O cara lá de cima", "username" => "admin", "senha" => "1234", "tipo_usuario_id" => 1, "empresa_id" => 1];

        Usuario::create($usuario);
    }
}
