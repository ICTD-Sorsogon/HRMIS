<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('position');
            $table->string('company');
            $table->decimal('salary');
            $table->enum('appointment', ['Temporary', 'Co-Terms', 'Permanent', 'Promotion']);
            $table->boolean('government_service');
            $table->text('description');
            $table->string('office');
            $table->string('supervisor_first_name');
            $table->string('supervisor_middle_name');
            $table->string('supervisor_last_name');
            $table->timestamps();

            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_experience');
    }
}
