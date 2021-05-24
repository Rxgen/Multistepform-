<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('description',255);
            $table->string('pappointment',10);
            $table->string('price',255);
            $table->string('hours',255);
            $table->string('intervals',255);
            $table->string('mtype',255);
            $table->string('Nparticipants',255);
            $table->string('Nmeeting',255);
            $table->string('Nperiod',255);
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
        Schema::dropIfExists('profiles');
    }
}
