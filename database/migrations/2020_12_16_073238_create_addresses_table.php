<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->boolean('permanent');
            $table->string('house_number');
            $table->string('street');
            $table->string('subdivision');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('zip_code');
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
        Schema::dropIfExists('profile_address');
    }
}
