<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reshead', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('residential');
            $table->string('metro');
            $table->string('luzon');
            $table->string('visayas');
            $table->string('mindanao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reshead');
    }
};
