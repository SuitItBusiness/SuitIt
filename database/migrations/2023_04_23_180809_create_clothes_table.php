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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('brand');
            $table->enum('season', ['spring', 'summer', 'fall', 'winter']);
            $table->float('price');
            $table->string('url');
            $table->integer('comfort_level');
            $table->boolean('general');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
