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
        Schema::create('labratory_infos', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('patient_infos');
            $table->string('parent_name');
            $table->string('description');
            $table->decimal('amount');
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
        Schema::dropIfExists('labratory_infos');
    }
};
