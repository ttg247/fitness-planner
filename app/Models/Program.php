<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function days()
    {
        return $this->hasMany(ProgramDay::class);
    }
}
