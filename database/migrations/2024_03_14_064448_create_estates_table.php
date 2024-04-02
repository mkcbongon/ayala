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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ft_title');
            $table->text('ft_img1');
            $table->text('ft_img2');
            $table->text('ft_img3');
            $table->string('ft_sub1');
            $table->string('ft_con1');
            $table->string('ft_sub2');
            $table->string('ft_con2');
            $table->string('ft_sub3');
            $table->string('ft_con3');
            $table->string('spanA');
            $table->string('titleA');
            $table->string('sub1');
            $table->string('con1');
            $table->string('con1_a');
            $table->string('con1_b');
            $table->string('con1_c');
            $table->text('img2');
            $table->string('sub2');
            $table->string('con2');
            $table->text('img3');
            $table->string('sub3');
            $table->string('con3');
            $table->text('img4');
            $table->string('sub4');
            $table->string('con4');
            $table->text('img5');
            $table->string('sub5');
            $table->string('con5');
            $table->string('spanB');
            $table->string('titleB');
            $table->string('subB');
            $table->string('conB');
            $table->string('sub6');
            $table->string('con6');
            $table->text('img6');
            $table->text('img7');
            $table->string('sub7');
            $table->string('con7');
            $table->string('sub8');
            $table->string('con8');
            $table->text('img8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
};
