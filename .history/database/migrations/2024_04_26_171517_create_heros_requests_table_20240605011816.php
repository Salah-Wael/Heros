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
        Schema::create('heros_requests', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fullName');
            $table->string('shortName',25)->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('sport');
            $table->foreign('sport')->references('sport')->on('sports');
            $table->string('origin_country');
            $table->foreign('origin_country')->references('country')->on('countries');
            $table->string('play_country')->nullable();
            $table->foreign('play_country')->references('country')->on('countries');
            $table->dateTime('birthDate');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heros_requests');
    }
};
