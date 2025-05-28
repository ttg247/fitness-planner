<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body_part',
        'description',
        'reps',
        'gif',
    ];

    // Relationships (if any) can be defined here
    public function programDayExercises()
    {
        return $this->hasMany(ProgramDayExercise::class);
    }
}
