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
            $table->string('year');
            $table->int('name');
            		host_country	host_city	athletes	teams	competitions	country	gold	silver	bronze

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
