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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreign('conversation_id')->contrained();

            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users');

            $table->unsignedBigInteger('receiver');
            $table->foreign('sender_id')->references('id')->on('users');

            $table->timestamp('readed_at')->nullable();
            $table->timestamp('sender_deleted_at')->nullable();
            $table->timestamp('sender_deleted_id')->nullable();
            $table->timestamp('readed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
