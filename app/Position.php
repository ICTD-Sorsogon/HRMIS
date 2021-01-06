<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
