<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('from_explorer_id')->constrained('explorers')->onDelete('cascade');
            $table->foreignId('to_explorer_id')->constrained('explorers')->onDelete('cascade');
            $table->enum('status', ['Pendente', 'Aceita', 'Recusada'])->default('Pendente');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};
