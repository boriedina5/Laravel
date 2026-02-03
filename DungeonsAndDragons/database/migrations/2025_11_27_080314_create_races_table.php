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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("lifetime");
            $table->double("avgHeight");
            $table->boolean("darkVision")->default(false);
            $table->timestamps();//Created_at és Updated_at
            $table->softDeletes(); //Deleted_at; models ->race.php-nak tudnia kell róla
            //nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
