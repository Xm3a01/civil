<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('profile');
            $table->longText('ar_profile');
            $table->string('address');
            $table->string('ar_address');
            $table->string('tel');
            $table->string('email');
            $table->string('img');
            $table->bigInteger('num1');
            $table->bigInteger('num2');
            $table->bigInteger('num3');
            $table->bigInteger('num4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
