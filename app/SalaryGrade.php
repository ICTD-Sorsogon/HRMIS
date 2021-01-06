<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryGrade extends Model
{
    public function salary()
    {
        return $this->hasOne(Salary::class);
    }
}
