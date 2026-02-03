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
        Schema::create('reindeers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('flight_speed');
            $table->integer('weight');
            $table->string('color', 7);
            $table->string('diet');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reindeers');
    }
};
