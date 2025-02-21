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
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fornecedor_id')->references('id')->on('fornecedor')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('editora_id')->references('id')->on('editora')->onDelete('cascade')->onUpdate('cascade');;
            $table->string('nome', 100);
            $table->integer('quantidade');
            $table->timestamp('dataCadastro')->useCurrent();
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro');
    }
};
