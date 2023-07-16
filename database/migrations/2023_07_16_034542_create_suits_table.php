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
        Schema::create('suits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('color_id');
            $table->string('main_picture');
            $table->string('picture_1')->nullable();
            $table->string('picture_2')->nullable();
            $table->string('picture_3')->nullable();
            $table->string('picture_4')->nullable();
            $table->string('picture_5')->nullable();
            $table->string('name');
            $table->string('code');
            $table->string('size');
            $table->string('material');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suits');
    }
};
