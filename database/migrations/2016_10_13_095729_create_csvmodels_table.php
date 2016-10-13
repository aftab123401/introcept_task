<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csvmodels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->biginteger('phone');
            $table->string('email');
            $table->string('address');
            $table->string('nationality');
            $table->date('dob');
            $table->string('education');
            $table->string('contact');
            $table->string('gender');
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
        Schema::dropIfExists('csvmodels');
    }
}
