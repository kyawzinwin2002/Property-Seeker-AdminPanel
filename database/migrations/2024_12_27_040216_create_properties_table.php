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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('city');
            $table->string('district');
            $table->text('description');
            $table->integer('price');
            $table->string('type');
            $table->integer('bedrooms');
            $table->string('status');
            $table->dateTime('date_first_offered_for_sale');
            $table->foreignId('representative_id')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
