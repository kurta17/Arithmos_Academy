<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionTried; // Fixed model import

class QuestionTriedController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'question_id' => 'required|integer',
            'initiated' => 'required|boolean',
            'solved' => 'required|boolean',
            'grade' => 'required|integer',
            'question_number' => 'required|integer',
        ]);

        QuestionTried::create($validatedData);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'initiated' => 'required|boolean',
            'solved' => 'required|boolean',
        ]);

        $questionTried = QuestionTried::findOrFail($id);
        $questionTried->update($validatedData);

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function show($id)
    {
        $questionTried = QuestionTried::findOrFail($id); 

        return view('questiontried.show', compact('questionTried'));
    }
}
