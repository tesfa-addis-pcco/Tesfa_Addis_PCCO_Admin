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
        Schema::create('transport_infos', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name');
            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('patient_infos');
            $table->date('date');
            $table->decimal('amount');
            $table->string('travel_destination');
            $table->string('remark');
            $table->boolean('last_service');
            $table->string('center_location');
            $table->foreign('center_location')->references('center_location')->on('patient_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_infos');
    }
};
