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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 125)->nullable(false);
            $table->longText('description')->nullable(true);
            $table->string('thumb')->nullable(true);
            $table->decimal('price', 5, 2)->nullable(false);
            $table->string('series', 50)->nullable(false);
            $table->date('sale_date')->nullable(false);
            $table->string('type')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
