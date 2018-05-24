<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrivals', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('donator_id');
            $table->integer('doctor_id');
            $table->integer('assistant_id');
            $table->integer('hemoglobin');
            $table->integer('blood_sys');
            $table->integer('blood_dia');
            $table->boolean('accepted')->default(false);
            $table->text('reason')->nullable();
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
        Schema::dropIfExists('arrivals');
    }
}
