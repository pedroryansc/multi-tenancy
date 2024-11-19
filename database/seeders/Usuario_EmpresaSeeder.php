<?php

namespace Database\Seeders;

use App\Models\Usuario_Empresa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usuario_EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuariosEmpresas = [
            ["usuario_id" => 1, "empresa_id" => 1, "tipo_usuario_id" => 1],
            ["usuario_id" => 2, "empresa_id" => 2, "tipo_usuario_id" => 1]
        ];

        foreach($usuariosEmpresas as $usuarioEmpresa)
            Usuario_Empresa::create($usuarioEmpresa);
    }
}
