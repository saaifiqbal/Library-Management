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
        Schema::create('permission_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('user_group_id');
            $table->boolean('is_create')->nullable();
            $table->boolean('is_update')->nullable();
            $table->boolean('is_view')->nullable();
            $table->boolean('is_report')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('user_group_id')->references('id')->on('user_groups')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_groups');
    }
};
