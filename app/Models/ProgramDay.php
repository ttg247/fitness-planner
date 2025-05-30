<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramDay extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'program_id',   // foreign key linking to Program
        'day_number',   // the day number in the program (e.g., Day 1, Day 2)
        'title',
        'notes',
    ];
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    
    public function programDayExercises()
    {
        return $this->hasMany(ProgramDayExercise::class);
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'program_day_exercises')
            ->withPivot('sets', 'reps', 'order')
            ->withTimestamps()
            ->orderBy('program_day_exercises.order');
    }

}
