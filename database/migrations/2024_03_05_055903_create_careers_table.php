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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('img1');
            $table->text('img2');
            $table->text('img3');
            $table->string('title1');
            $table->string('stmt1');
            $table->string('stmt1_2');
            $table->text('img4');
            $table->string('title2');
            $table->string('stmt2');
            $table->text('img5');
            $table->string('h1');
            $table->string('h1_stmt');
            $table->string('h2');
            $table->string('h2_stmt');
            $table->string('h3');
            $table->string('h3_stmt');
            $table->string('h4');
            $table->string('h4_stmt');
            $table->string('h5');
            $table->string('h5_stmt');
            $table->text('img6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
};
