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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->integer("valor");
            $table->string("descricao", 100);
            $table->unsignedBigInteger("tipo_conta_id");
            $table->date("data");
            $table->unsignedBigInteger("empresa_id");
            $table->timestamps();

            $table->foreign("tipo_conta_id")->references("id")->on("tipo_contas");
            $table->foreign("empresa_id")->references("id")->on("empresas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
