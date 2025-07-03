<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('valor');
            $table->decimal('longitude', 10, 6)->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->foreignId('explorer_id')->constrained('explorers')->onDelete('cascade');
            $table->timestamps();
        }); 
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
