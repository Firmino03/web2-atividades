<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * PASSO 3: Criar Tabela de Categorias
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();                      // chave primária, inteiro, auto-incremento
            $table->string('name')->unique();  // nome único
            $table->timestamps();              // created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
