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
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cargo_id')->references('id')->on('cargo')->onDelete('cascade')->onUpdate('cascade');//identifica uma relação 
            $table->string('nome', 100);
            $table->double('salario');
            $table->string('cpf', 11)->unique(); //não permite que essa chave se repita 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario');
    }
};
