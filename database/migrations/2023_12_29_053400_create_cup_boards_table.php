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
        Schema::create('cup_boards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 255)->nullable();
            $table->integer('row_no')->nullable();
            $table->integer('col_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cup_boards');
    }
};
