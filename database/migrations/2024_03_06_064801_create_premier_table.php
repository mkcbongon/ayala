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
        Schema::create('premier', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('h1');
            $table->string('p1');
            $table->string('h2');
            $table->text('ph1')->nullable();
            $table->text('ph2')->nullable();
            $table->text('ph3')->nullable();
            $table->string('span');
            $table->string('h3');
            $table->string('p3a');
            $table->string('p3b');
            $table->text('ph4')->nullable();
            $table->string('loc');
            $table->string('title');
            $table->string('con1');
            $table->string('sub1');
            $table->string('con2');
            $table->string('sub2');
            $table->string('con3');
            $table->string('sub3');
            $table->string('con4');
            $table->string('sub4');
            $table->string('con5');
            $table->text('img1');
            $table->text('img2');
            $table->text('img3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premier');
    }
};
