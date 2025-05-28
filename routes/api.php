<?php
use App\Http\Controllers\API\WorkoutController;

Route::middleware('')->group(function () {
    Route::get('/workouts/today', [WorkoutController::class, 'today']);
    Route::post('/workouts/log', [WorkoutController::class, 'log']);
    Route::get('/progress', [WorkoutController::class, 'progress']);
});
