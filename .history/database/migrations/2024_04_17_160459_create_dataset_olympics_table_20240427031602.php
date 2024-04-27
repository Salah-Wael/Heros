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
        if (!Schema::hasTable('dataset_olympics')) {
            Schema::create('dataset_olympics', function (Blueprint $table) {
                $table->unsignedBigInteger('id');
                $table->string('Name');
                $table->string('gender');
                $table->tinyInteger('Age');
                $table->float('Height')->nullable();
                $table->float('Weight')->nullable();
                $table->string('Team');
                $table->string('NOC', 4);
                $table->string('Games')->nullable();
                $table->integer('Year', 4);
                $table->enum('games_type', ['Winter', 'Summer']);
                $table->string('host_city');
                $table->string('Sport');
                $table->text('Event');
                $table->string('Medal')->default('None')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('dataset_olympics');
    }
};
