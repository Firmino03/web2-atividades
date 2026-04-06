<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * PASSO 2: Criar Tabela de Authors (Autores)
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();                           // chave primária
            $table->string('name');                 // nome do autor
            $table->string('email')->unique();      // email único
            $table->date('birth_date')->nullable(); // data de nascimento (nullable)
            $table->timestamps();                   // created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
