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
        Schema::create('counselings', function (Blueprint $table) {
            $table->id();
            $table->string('plan_type');
            $table->integer('plan_in_number');
            $table->boolean('plan_accomplished');
            $table->string('challenge');
            $table->string('measure_taken');
            $table->string('remark');
            $table->string('center_location');
            $table->string('place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counselings');
    }
};
