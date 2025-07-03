<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trade_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('trade_id')->constrained('trades')->onDelete('cascade');
            $table->foreignId('items_id')->constrained('items')->onDelete('cascade');

            $table->enum('offered_by', ['from', 'to']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trade_items');
    }
};
