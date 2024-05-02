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
        
        $validatedData['user_id'] = Auth::id();
        $QuestionsTried::create($validatedData);

        return redirect()->back()->with('success', 'Data saved successfully!');
    }

    
    public function show($id)
    {
        // dd($id);
        $questionTried = QuestionsTried::where('user_id', $id)->get();
        
        return view('questionstried.show', compact('questionTried'));
    }
    

}
