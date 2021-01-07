<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function permanentAddress() {
        return $this->address()->where('permanent', 1);
    }

   public function position()
   {
       return $this->hasOne(Position::class);
   }

   public function address()
   {
        return $this->hasMany(Address::class);
   }

   public function experience()
   {
        return $this->hasMany(WorkExperience::class);
   }

   public function children()
   {
       return $this->hasMany(Children::class);
   }

   public function education()
   {
       return $this->hasMany(Education::class);
   }

   public function volunteer()
   {
       return $this->hasMany(VoluntaryWork::class);
   }

   public function eligibilities()
   {
       return $this->hasMany(Eligibility::class);
   }

   public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
