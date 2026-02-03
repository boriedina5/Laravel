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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->integer('school_year');
            $table->unsignedBigInteger('house_id');
            $table->foreign('house_id')->references('id')->on('houses')->onDelete('cascade'); //ha név elnevezési eljárás nem ugyanaz, így direktbe meg tudod, adni az elnevezést, itt a foreginId->constrained is jó
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
