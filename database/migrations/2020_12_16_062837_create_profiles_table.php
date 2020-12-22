<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->decimal('weight');
            $table->decimal('height');
            $table->string('suffix')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->enum('blood_type', ['A','AB', 'B', 'O']);
            $table->date('dob');
            $table->string('place_of_birth');
            $table->string('tin',15);
            $table->string('sss', 15);
            $table->string('philhealth', 15);
            $table->string('pag-ibig', 15);
            $table->string('gsis', 15);
            $table->string('mobile',15);
            $table->string('telephone',15);
            $table->string('email');
            $table->string('umid')->nullable();
            $table->string('citizenship'); //suggested format if dual citizenship (fil-am/ fil-can)
            $table->enum('civil_status', ['single', 'married', 'widowed','separated','others']);
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employer')->nullable();
            $table->string('spouse_business_address')->nullable();
            $table->string('spouse_contact_number')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_middle_name')->nullable();
            $table->string('father_name_extension')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_middle_name')->nullable();
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
        Schema::dropIfExists('profile');
    }
}
