<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $grade = $request->input('grade');
        $tests = Test::where('grade_id',$grade)->get();
        // Assuming you want the first test from the collection
        $test = $tests->first(); 
        return view('question', compact('tests','test'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'grade_id' => 'required|exists:grades,id',
            'options_a' => 'required|array',
            'options_b' => 'required|array',
            'options_c' => 'required|array',
            'options_d' => 'required|array',
            'answer' => 'required|in:a,b,c,d',
        ]);

        Test::create($request->all());

        return redirect()->route('tests.index')
            ->with('success', 'Test created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($grade_id, $number_id)
    {
        $currentQuestion = Test::where('grade_id', $grade_id)
                               ->where('number_id', $number_id)
                               ->firstOrFail();
    
        // Assuming you're finding the next question based on some logic
        $nextQuestion = Test::where('grade_id', $grade_id)
                            ->where('number_id', '>', $number_id)
                            ->orderBy('number_id')
                            ->first();
    
        $nextQuestionId = $nextQuestion ? $nextQuestion->number_id : null;
    
        return view('question.show', [
            'test' => $currentQuestion,
            'nextQuestionId' => $nextQuestionId,
        ]);
    }
    
    
        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// Inside your TestController
    public function update($id)
    {
        // Retrieve the current question from the database
        $currentQuestion = Test::findOrFail($id);

        // Get the next question's ID based on the current question's ID
        $nextQuestionId = $currentQuestion->number_id + 1;

        // Assuming you also have the grade_id available
        $gradeId = $currentQuestion->grade_id;

        // Redirect the user to the route for the next question
        return redirect()->route('question.show', ['grade_id' => $gradeId, 'number_id' => $nextQuestionId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();

        return redirect()->route('tests.index')
            ->with('success', 'Test deleted successfully.');
    }


    public function submit(Request $request)
    {
        // Get the current question's ID from the request
        $currentQuestionId = $request->input('question_id');
        
        // Get the user's selected answer from the form
        $selectedAnswer = $request->input('answer');
        
        // Retrieve the current question from the database
        $currentQuestion = Test::findOrFail($currentQuestionId);
        
        // Get the correct answer from the database
        $correctAnswer = $currentQuestion->answer;
        
        // Compare the user's answer with the correct answer
        $isCorrect = ($selectedAnswer === $correctAnswer);
        
        // You can then do further processing based on whether the answer is correct or not
        if ($isCorrect) {
            // If the answer is correct, you can do something like incrementing a counter
            // or storing the result in the session to display later
            // For example, increment the correct answers counter stored in the session
            $correctAnswersCount = $request->session()->get('correct_answers_count', 0);
            $request->session()->put('correct_answers_count', $correctAnswersCount + 1);
        }
        
        // Assuming you have the next question's ID stored in the session
        $nextQuestionId = $currentQuestionId + 1;
        
        // Redirect the user to the route for the next question
        return redirect()->route('update', ['number_id' => $nextQuestionId]);
    }
        

}
