<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_texts', function (Blueprint $table) {
            $table->increments('entry_id');
            $table->string('reference_no');
            $table->string('branch_name');
            $table->string('date');
            $table->string('time');
            $table->string('fir_id');
            $table->string('police_entry');
            $table->string('other_details');
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
        Schema::dropIfExists('entry_texts');
    }
}
