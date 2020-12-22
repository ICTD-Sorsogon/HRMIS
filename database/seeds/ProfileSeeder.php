<?php

use App\{Address, Children, Education, Eligibility, Profile, Training, VoluntaryWork};
use App\WorkExperience;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = factory(Profile::class)->create();
        factory(Address::class)->create(['profile_id' => $id]);
        factory(Education::class)->create(['profile_id' => $id]);
        factory(WorkExperience::class)->create(['profile_id' => $id]);
        factory(Training::class)->create(['profile_id' => $id]);
        factory(Eligibility::class)->create(['profile_id' => $id]);
        factory(VoluntaryWork::class)->create(['profile_id' => $id]);
        factory(Children::class)->create(['profile_id' => $id]);
    }
}
