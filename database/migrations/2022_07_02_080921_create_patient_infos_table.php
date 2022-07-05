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
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('parent_name');
            $table->date('birthday');
            $table->string('region');
            $table->string('woreda');
            $table->string('child_name');
            $table->integer('age');
            $table->string('sex');
            $table->string('education');
            $table->string('diagnose');
            $table->date('entrance_date');
            $table->boolean('is_active');
            $table->string('center_location')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_infos');
    }
};
