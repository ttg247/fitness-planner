<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramDay extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    
    public function exercises()
    {
        return $this->hasMany(ProgramDayExercise::class);
    }

}
