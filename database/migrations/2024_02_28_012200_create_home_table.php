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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('logo');
            $table->string('h1');
            $table->string('carousel1');
            $table->string('carousel1_desc');
            $table->text('carousel1_img');
            $table->string('carousel2');
            $table->string('carousel2_desc');
            $table->text('carousel2_img');
            $table->string('carousel3');
            $table->string('carousel3_desc');
            $table->text('carousel3_img');
            $table->string('carousel4');
            $table->string('carousel4_desc');
            $table->text('carousel4_img');
            $table->text('img1');
            $table->string('title1');
            $table->string('statement1');
            $table->text('bg_img');
            $table->string('h3');
            $table->string('title2');
            $table->string('stmt2');
            $table->string('quote');
            $table->string('name');
            $table->string('position');
            $table->string('title3');
            $table->string('stmt3');
            $table->text('img2');
            $table->text('img3');
            $table->string('stmt4');
            $table->string('stmt4_1');
            $table->string('span1');
            $table->string('title4');
            $table->string('title5');
            $table->string('stmt5');
            $table->string('stmt5_1');
            $table->string('stmt5_2');
            $table->text('img4');
            $table->string('img4_title');
            $table->string('img4_stmnt');
            $table->string('view');
            $table->text('view_link');
            $table->text('logo2');
            $table->string('address');
            $table->text('fb');
            $table->text('twtr');
            $table->text('linked');
            $table->text('ig');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
};
