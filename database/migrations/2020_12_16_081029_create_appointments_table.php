<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('steps')->length(8);
            $table->date('original_appointment');
            $table->date('promotion');
            $table->enum('status', ['elected', 'co-terminus', 'permanent']);
            $table->enum('level', ['K', 'T', 'A']);
            $table->timestamps();

            $table->unsignedBigInteger('profile_id')->nullable()->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles');

            $table->unsignedBigInteger('salary'); //will base on salary grade, also actual salary will be base on steps gained
            $table->foreign('salary')->references('id')->on('salary_grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
