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
        Schema::create('preco_livro', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livro_id')->references('id')->on('livro')->onDelete('cascade')->onUpdate('cascade');;
            $table->double('valor');
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preco_livro');
    }
};
