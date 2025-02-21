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
        Schema::create('item_venda', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('livro_id')->references('id')->on('livro')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('venda_id')->references('id')->on('venda')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('quantidadeItem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_venda');
    }
};
