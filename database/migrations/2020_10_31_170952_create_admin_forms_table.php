<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_forms', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('officer_id');
            $table->string('officer_name');
            $table->string('rank');
            $table->string('dob');
            $table->string('address');
            $table->string('contact_no');
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
        Schema::dropIfExists('admin_forms');
    }
}
