<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionsTried; 

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

        QuestionsTried::create($validatedData);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'initiated' => 'required|boolean',
            'solved' => 'required|boolean',
        ]);

        $questionTried = QuestionsTried::findOrFail($id);
        $questionTried->update($validatedData);

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    
    public function show($id)
    {
        dd($id);
        $questionTried = QuestionTried::where('user_id', $id)->get();   
        
        return view('questiontried.show', compact('questionTried'));
    }
    

}
