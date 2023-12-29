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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description',1000)->nullable();
            $table->string('icon_name',255)->nullable();
            $table->string('path',255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
