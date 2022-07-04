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
        Schema::create('activity_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('birthday_celebration');
            $table->integer('coffee_celebration');
            $table->integer('school_participant');
            $table->date('date');
            $table->string('center_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_infos');
    }
};
