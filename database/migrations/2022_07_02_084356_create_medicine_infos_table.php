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
        Schema::create('medicine_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('date');
            $table->integer('quantity');
            $table->decimal('unit_price');
            $table->decimal('total_in_dollars');
            $table->string('medicine');
            $table->integer('unit');
            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('patient_infos');
            $table->string('parent_name');
            $table->string('remark');
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
        Schema::dropIfExists('medicine_infos');
    }
};
