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
        Schema::table('heros_requests', function (Blueprint $table) {
            $table->foreignId('auth_id')->constrained('users')->onDelete('cascade')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('heros_requests', function (Blueprint $table) {
            $table->dropForeign(['auth_id']);
            $table->dropColumn('auth_id');
        });
    }
};
