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
        Schema::create('makati', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('h1');
            $table->string('p1');
            $table->string('h2');
            $table->text('ph1');
            $table->text('ph2');
            $table->text('ph3');
            $table->string('loc');
            $table->string('title');
            $table->string('con');
            $table->string('sub1');
            $table->string('con1');
            $table->string('sub2');
            $table->string('con2');
            $table->string('sub3');
            $table->string('con3');
            $table->string('sub4');
            $table->string('con4');
            $table->string('sub5');
            $table->string('con5');
            $table->string('sub6');
            $table->string('con6');
            $table->string('sub7');
            $table->string('con7');
            $table->text('img1');
            $table->text('img2');
            $table->text('img3');
            $table->text('img4');
            $table->text('img5');
            $table->text('img6');
            $table->text('img7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makati');
    }
};
