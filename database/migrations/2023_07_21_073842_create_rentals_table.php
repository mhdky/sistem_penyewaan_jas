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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suit_id');
            $table->string('name');
            $table->string('email');
            $table->dateTime('rental_date');
            $table->dateTime('finish_rental_date');
            $table->integer('rental_fee');
            $table->integer('warranty_fee');
            $table->integer('total_cost')->default(0);
            $table->boolean('finish_rental')->default(false);
            $table->boolean('protection')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
