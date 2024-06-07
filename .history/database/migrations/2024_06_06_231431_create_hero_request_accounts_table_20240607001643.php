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
        Schema::create('hero_request_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account');
            $table->foreignId('hero_reques_id')->constrained('heros')->onDelete('cascade');
            $table->foreignId('bank_id')->constrained('banks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_request_accounts');
    }
};
