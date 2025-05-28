<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    protected $fillable = ['user_id', 'date', 'xp_earned'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

