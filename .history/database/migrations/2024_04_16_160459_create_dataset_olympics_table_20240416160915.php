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
            $table->string('Name');
            $table->string('gender');
            $table->tinyInteger('Age');
            $table->float('Height');
            $table->float('Weight');
            $table->string('Team');
            $table->string('NOC',10);

            							Games	Year	games_type	host_city	Sport	Event	Medal


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
