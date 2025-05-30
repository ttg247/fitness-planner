<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // Get all programs
    public function index()
    {
        return response()->json(Program::all());
    }

    // Show a single program
    public function show(Program $program)
    {
        return response()->json($program);
    }

    // Store a new program
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'difficulty' => 'nullable|string|max:255',
        ]);

        $program = Program::create($validated);

        return response()->json($program, 201);
    }

    // Update an existing program
    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'difficulty' => 'nullable|string|max:255',
        ]);

        $program->update($validated);

        return response()->json($program);
    }

    // Delete a program
    public function destroy(Program $program)
    {
        $program->delete();

        return response()->json(null, 204);
    }
}
