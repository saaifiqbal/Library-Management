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
        Schema::create('donners', function (Blueprint $table) {
            $table->id();
            $table->string('memberShipNo', 100)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->string('name', 500)->nullable();
            $table->dateTime('date_of_birth');
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('present_address', 500)->nullable();
            $table->string('permanent_address', 500)->nullable();
            $table->string('mobile_no', 100)->nullable();
            $table->string('whatapp_no', 100)->nullable();
            $table->unsignedBigInteger('occupation')->nullable();
            $table->unsignedBigInteger('blood_group')->nullable();
            $table->string('qualification',500)->nullable();
            $table->string('institute',500)->nullable();
            $table->unsignedBigInteger('gender')->nullable();
            $table->unsignedBigInteger('image_id')->nullable();
            $table->integer('nid_id')->nullable();
            $table->boolean('is_nid')->nullable();
            $table->timestamps();
            $table->foreign('occupation')->references('id')->on('occupations')->onDelete('cascade');
            $table->foreign('blood_group')->references('id')->on('blood_groups')->onDelete('cascade');
            $table->foreign('gender')->references('id')->on('sexes')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('nid_images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donners');
    }
};
