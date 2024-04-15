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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('idcard');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email');
            $table->date('dob');
            $table->text('uploads');
            $table->string('property');
            $table->string('category');
            $table->string('type');
            $table->string('location');
            $table->double('price');
            $table->text('description');
            $table->string('status');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
