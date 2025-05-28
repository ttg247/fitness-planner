<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::insert([
            [
                'name' => 'Push Ups',
                'body_part' => 'Chest',
                'description' => 'Upper body exercise targeting chest, shoulders, and triceps.',
                'gif_url' => 'https://media.giphy.com/media/l0MYKDRP0L6X1xMMY/giphy.gif',
            ],
            [
                'name' => 'Jumping Jacks',
                'body_part' => 'Full Body',
                'description' => 'Cardio exercise to warm up the entire body.',
                'gif_url' => 'https://media.giphy.com/media/3o6ZsZvYbXm2PfJbHG/giphy.gif',
            ],
            [
                'name' => 'Squats',
                'body_part' => 'Legs',
                'description' => 'Strengthens thighs, hips, and buttocks.',
                'gif_url' => 'https://media.giphy.com/media/26xBukhKTYI1JvHpu/giphy.gif',
            ],
        ]);
    }
}
