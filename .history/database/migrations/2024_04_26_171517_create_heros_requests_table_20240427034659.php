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
            $table->string('origin_country');
            $table->string('play');
            $table->dateTime('birthDate');
            $table->string('gender');
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