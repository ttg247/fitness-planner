<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProgram extends Model
{
    protected $fillable = ['user_id', 'program_id', 'current_day'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
