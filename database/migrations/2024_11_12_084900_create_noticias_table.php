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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 45);
            $table->string("subtitulo", 200);
            $table->text("texto");
            $table->unsignedBigInteger("usuario_id");
            $table->unsignedBigInteger("empresa_id");
            $table->timestamps();

            $table->foreign("usuario_id")->references("id")->on("usuarios");
            $table->foreign("empresa_id")->references("id")->on("empresas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
