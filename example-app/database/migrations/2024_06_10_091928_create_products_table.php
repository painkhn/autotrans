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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('engine');
            $table->string('power');
            $table->string('transmission');
            $table->string('drive');
            $table->string('color');
            $table->string('rudder');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('equipment');
            $table->string('generation');
            $table->string('description');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
