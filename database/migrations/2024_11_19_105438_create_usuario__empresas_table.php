<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario__empresas', function (Blueprint $table) {
            $table->unsignedBigInteger("usuario_id");
            $table->unsignedBigInteger("empresa_id");
            $table->unsignedBigInteger("tipo_usuario_id");
            $table->timestamps();

            $table->primary(["usuario_id", "empresa_id", "tipo_usuario_id"]);

            $table->foreign("usuario_id")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("empresa_id")->references("id")->on("empresas")->onDelete("cascade");
            $table->foreign("tipo_usuario_id")->references("id")->on("tipo_usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario__empresas');
    }
};
