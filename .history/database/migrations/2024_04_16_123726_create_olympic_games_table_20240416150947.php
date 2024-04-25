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
        Schema::create('olympic_games', function (Blueprint $table) {
            $table->id();
            $table->string('year', 4);
            $table->string('games_type');
            $table->string('host_country');
            $table->string('host_city');
            $table->integer('athletes')->nullable();
            $table->integer('teams')-> nullable();
            $table->integer('competitions') nullable();
            $table->string('country');
            $table->smallInteger('gold')->default(0);
            $table->smallInteger('silver')->default(0);
            $table->smallInteger('bronze')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympic_games');
    }
};
