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
        if (!Schema::hasTable('olympic_games')) {
            Schema::create('olympic_games', function (Blueprint $table) {
                $table->id();
                $table->smallInteger('year', 4);
                $table->enum('games_type', ['Winter', 'Summer']);
                $table->string('host_country');
                $table->string('host_city');
                $table->integer('athletes')->nullable();
                $table->integer('teams')->nullable();
                $table->integer('competitions')->nullable();
                $table->string('country');
                $table->smallInteger('gold')->default(0);
                $table->smallInteger('silver')->default(0);
                $table->smallInteger('bronze')->default(0);

                $table->id(); // This will be the AUTO_INCREMENT column
                $table->smallInteger('year'); // Removed AUTO_INCREMENT from this column
                $table->enum('games_type', ['Winter', 'Summer']);
                $table->string('host_country');
                $table->string('host_city');
                $table->integer('athletes')->nullable();
                $table->integer('teams')->nullable();
                $table->integer('competitions')->nullable();
                $table->string('country');
                $table->smallInteger('gold')->default(0);
                $table->smallInteger('silver')->default(0);
                $table->smallInteger('bronze')->default(0);

                $table->unique(['year', 'games_type']); // Ensures combination of year and games_type is unique
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympic_games');
    }
};
