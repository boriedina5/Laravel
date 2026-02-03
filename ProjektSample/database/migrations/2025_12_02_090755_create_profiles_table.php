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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->integer('workOutPlans_id');
            $table->integer('mentalHelth_id');
            $table->integer('recipe_id');
            $table->integer('yourDatas_id');
            $table->integer('journal_id');
            $table->integer('foodDiary_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
