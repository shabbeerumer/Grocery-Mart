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
        Schema::create('home__section4s', function (Blueprint $table) {
            $table->id();
            $table->string('first_image')->nullable();
            $table->string('first_text')->nullable();
            $table->string('second_text')->nullable();
            $table->string('third_text')->nullable();
            $table->string('fourth_text')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home__section4s');
    }
};
