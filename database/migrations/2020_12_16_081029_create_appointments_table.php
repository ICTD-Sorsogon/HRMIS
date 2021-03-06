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
            $table->foreignId('profile_id')->constrained('profiles');
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
