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
        Schema::create('accomodation_infos', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('parent_name');
            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('patient_infos');
            $table->boolean('daily_bed_user');
            $table->boolean('return_for_appointment');
            $table->string('center_location');
            $table->string('remark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodation_infos');
    }
};
