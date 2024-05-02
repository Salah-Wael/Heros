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
        Schema::create('hero_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_na')->constrained('hero')->onDelete('cascade');
            $table->foreignId('hero_id')->constrained('hero')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_banks');
    }
};
