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
        Schema::create('dataset_olympics', function (Blueprint $table) {
            $table->unsignedBigIntger('id');
            $table->string('host_country');
            Name	gender	Age	Height	Weight	Team	NOC	Games	Year	games_type	host_city	Sport	Event	Medal


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataset_olympics');
    }
};
