<?php

namespace Database\Seeders;

use App\Models\Empresa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empresa = ["nome" => "Jovem Nerd"];

        Empresa::create($empresa);
    }
}
