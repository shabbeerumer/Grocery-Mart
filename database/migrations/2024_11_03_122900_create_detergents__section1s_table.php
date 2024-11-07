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
        Schema::create('detergents__section1s', function (Blueprint $table) {
            $table->id();
            $table->string('first_text')->nullable();
            $table->string('second_text')->nullable();
            $table->string('third_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detergents__section1s');
    }
};
