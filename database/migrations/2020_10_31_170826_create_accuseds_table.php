<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccusedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accuseds', function (Blueprint $table) {
            $table->increments('accu_id');
            $table->string('accused_fullname');
            $table->string('dob');
            $table->string('address');
            $table->string('city');
            $table->string('contact_no');
            $table->string('gender');
            $table->string('status');
            $table->string('number_of_crime');
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
        Schema::dropIfExists('accuseds');
    }
}
