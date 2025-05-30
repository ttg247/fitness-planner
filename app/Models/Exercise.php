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

    public function programDays()
    {
        return $this->belongsToMany(ProgramDay::class, 'program_day_exercises')
            ->withPivot('sets', 'reps', 'order')
            ->withTimestamps();
    }

}
