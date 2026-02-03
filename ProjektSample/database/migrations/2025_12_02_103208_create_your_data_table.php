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
        Schema::create('your_data', function (Blueprint $table) {
            $table->id();
            $table->integer('weight_id');
            $table->integer('height');
            $table->integer('shoulder');
            $table->integer('upperArm');
            $table->integer('foreArm');
            $table->integer('chest');
            $table->integer('stomatch');
            $table->integer('waist');
            $table->integer('hip');
            $table->integer('butt');
            $table->integer('thight');
            $table->integer('calf');
            $table->integer('doneWorkouts_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('your_data');
    }
};
