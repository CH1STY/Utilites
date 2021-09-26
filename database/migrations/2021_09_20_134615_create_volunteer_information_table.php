<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_information', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('worktype');
            $table->string('work_area');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('availablity');
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
        Schema::dropIfExists('volunteer_information');
    }
}