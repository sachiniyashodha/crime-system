<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitioners', function (Blueprint $table) {
            $table->increments('petitioner_id');
            $table->string('petitioner_fullname');
            $table->string('address');
            $table->string('city');
            $table->string('contact_no');
            $table->string('gender');
            $table->string('canplan');
            $table->string('details');
            $table->string('officer_id');
            $table->string('officer_name');
            $table->string('date_of_hair');
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
        Schema::dropIfExists('petitioners');
    }
}
