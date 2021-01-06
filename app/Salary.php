<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
