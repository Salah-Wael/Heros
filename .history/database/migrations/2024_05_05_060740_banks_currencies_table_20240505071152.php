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
        Schema::create('banks_currencies', function (Blueprint $table) {
            $table->unsignedTinyInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currency')->cascadeOnDelete();

            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('bankss')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
