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
        Schema::create('legacy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('video');
            $table->string('title1');
            $table->string('stmt1');
            $table->string('stmt2');
            $table->string('h2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacy');
    }
};
