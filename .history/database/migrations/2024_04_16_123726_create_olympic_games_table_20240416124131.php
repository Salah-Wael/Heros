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
            $table->string('year');
            $table->string('games_type');
            $table->string('host_country');
            $table->string('host_city');
            $table->int('athletes');
            $table->int('teams');
            $table->int('competitions');
            $table->string('country');
            $table->int('gold');
            $table->int('gold');
            $table->int('gold');
            									silver	bronze

            $table->timestamps();
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
