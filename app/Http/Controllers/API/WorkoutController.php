<?php 
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProgram;
use App\Models\ProgramDay;
use App\Models\WorkoutLog;
use Carbon\Carbon;

class WorkoutController extends Controller
{
    public function today(Request $request)
    {
        $user = $request->user();
        $userProgram = UserProgram::where('user_id', $user->id)->first();

        if (!$userProgram) {
            return response()->json(['error' => 'No program selected'], 404);
        }

        $programDay = ProgramDay::with('exercises.exercise')
            ->where('program_id', $userProgram->program_id)
            ->where('day_number', $userProgram->current_day)
            ->first();

        return response()->json($programDay);
    }

    public function log(Request $request)
    {
        $user = $request->user();
        $today = Carbon::now()->toDateString();

        $alreadyLogged = WorkoutLog::where('user_id', $user->id)->where('date', $today)->exists();

        if ($alreadyLogged) {
            return response()->json(['message' => 'Workout already logged today']);
        }

        WorkoutLog::create([
            'user_id' => $user->id,
            'date' => $today,
            'xp_earned' => 50,
        ]);

        $userProgram = UserProgram::where('user_id', $user->id)->first();
        $userProgram->increment('current_day');

        return response()->json(['message' => 'Workout logged successfully']);
    }

    public function progress(Request $request)
    {
        $user = $request->user();
        $logs = WorkoutLog::where('user_id', $user->id)->orderBy('date')->get();
        $xp = $logs->sum('xp_earned');
        $level = floor($xp / 100);
        $streak = $this->calculateStreak($logs);

        return response()->json([
            'xp' => $xp,
            'level' => $level,
            'streak' => $streak,
        ]);
    }

    private function calculateStreak($logs)
    {
        if ($logs->isEmpty()) return 0;

        $dates = $logs->pluck('date')->map(fn ($d) => Carbon::parse($d)->toDateString())->unique()->sortDesc()->values();
        $streak = 1;

        for ($i = 1; $i < $dates->count(); $i++) {
            $current = Carbon::parse($dates[$i - 1]);
            $next = Carbon::parse($dates[$i]);

            if ($current->diffInDays($next) === 1) {
                $streak++;
            } else {
                break;
            }
        }

        return $streak;
    }
}
