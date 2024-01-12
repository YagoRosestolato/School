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
        Schema::create('licitacao__itens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('licitacao_id')->constrained(); 
            $table->foreignId('item_id')->constrained(); 
            $table->decimal('preco', 10, 2);
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitacao__itens');
    }
};
