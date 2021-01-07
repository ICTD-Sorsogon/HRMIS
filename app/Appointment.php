<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
