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
        Schema::create('home__section5s', function (Blueprint $table) {
            $table->id();
            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('title')->nullable();
            $table->string('cut_price')->nullable();
            $table->string('price')->nullable();
            $table->string('button_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home__section5s');
    }
};
