<?php
// app\Http\Controllers\QuestionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create a new question
        Question::create($validatedData);

        // Redirect with success message
        return redirect()->route('question.create')
            ->with('success', 'Question created successfully.');
    }
}
