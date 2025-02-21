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
        Schema::create('logs', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('usuario_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');;
            $table->string('tabela', 50);
            $table->enum('acao', ['INSERT', 'UPDATE', 'DELETE']);
            $table->text('dadosAntigos')->nullable();
            $table->text('dadosNovos')->nullable();
            $table->timestamp('dataHora')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
