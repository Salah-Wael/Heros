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
        Schema::create('heros', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('fullName');
            $table->string('shortName',25)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at');
            $table->dateTime('birthDate')->nullable();
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
        Schema::dropIfExists('heros');
    }
};
