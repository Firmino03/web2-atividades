<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();             // chave primária, inteiro, auto-incremento
            $table->string('title'); // título do livro
            $table->integer('pages'); // número de páginas

            $table->foreignId('author_id')
                  ->constrained('authors')
                  ->onDelete('cascade');    // FK -> authors

            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onDelete('cascade');    // FK -> categories

            $table->foreignId('publisher_id')
                  ->constrained('publishers')
                  ->onDelete('cascade');    // FK -> publishers

            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
