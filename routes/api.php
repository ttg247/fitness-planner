<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WorkoutController;
use App\Http\Controllers\API\ExerciseController;

Route::middleware('api')->group(function () {
    Route::get('/workouts/today', [WorkoutController::class, 'today']);
    Route::post('/workouts/log', [WorkoutController::class, 'log']);
    Route::get('/progress', [WorkoutController::class, 'progress']);
    Route::get('/exercises', [ExerciseController::class, 'index']);
});
