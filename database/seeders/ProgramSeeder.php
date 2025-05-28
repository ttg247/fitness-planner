<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\ProgramDay;
use App\Models\DayExercise;
use App\Models\Exercise;


class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $program = Program::create([
            'name' => 'Beginner Burn',
            'description' => 'A simple 3-day program for beginners.',
            'difficulty' => 'beginner',
        ]);

        $exerciseIds = Exercise::pluck('id')->toArray();

        for ($day = 1; $day <= 3; $day++) {
            $programDay = ProgramDay::create([
                'program_id' => $program->id,
                'day_number' => $day,
                'title' => "Day $day",
            ]);

            foreach ($exerciseIds as $exerciseId) {
                DayExercise::create([
                    'program_day_id' => $programDay->id,
                    'exercise_id' => $exerciseId,
                    'sets' => rand(1, 3),
                    'reps' => rand(10, 20),
                ]);
            }
        }
    }
}
