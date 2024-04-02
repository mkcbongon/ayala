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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ft_title');
            $table->text('ft_img1');
            $table->text('ft_img2');
            $table->text('ft_img3');
            $table->text('ft_img4');
            $table->text('ft_img5');
            $table->string('spanA');
            $table->string('titleA');
            $table->string('conA');
            $table->text('img1');
            $table->string('loc1');
            $table->string('sub1');
            $table->string('con1');
            $table->text('img2');
            $table->string('loc2');
            $table->string('sub2');
            $table->string('con2');
            $table->text('img3');
            $table->string('loc3');
            $table->string('sub3');
            $table->string('con3');
            $table->text('img4');
            $table->string('loc4');
            $table->string('sub4');
            $table->string('con4');
            $table->string('spanB');
            $table->string('titleB');
            $table->string('conB');
            $table->text('img5');
            $table->string('con5');
            $table->text('img6');
            $table->string('sub6');
            $table->string('con6');
            $table->string('sub');
            $table->string('con');
            $table->text('img7');
            $table->string('sub7');
            $table->string('con7');
            $table->text('img8');
            $table->string('con8');
            $table->text('img9');
            $table->string('sub9');
            $table->string('con9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residences');
    }
};
