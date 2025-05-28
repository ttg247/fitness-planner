<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDayExercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_day_id',
        'exercise_id',
        'reps',
        'sets',
        'duration',
        'order',
    ];

    public function programDay()
    {
        return $this->belongsTo(ProgramDay::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
