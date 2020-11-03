<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrimeFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crime_files', function (Blueprint $table) {
            $table->increments('fir_no');
            $table->string('accused_id');
            $table->string('victim_id');
            $table->string('petitioner_id');
            $table->string('place_of_incident');
            $table->string('date_of_incident');
            $table->string('time_of_incident');
            $table->string('date_filr');
            $table->string('accused_status');
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
        Schema::dropIfExists('crime_files');
    }
}
