<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index(Request $request)
    {   
        $grade = $request->get('grade');
        $question_number = $request->get('question_number');
        if ($grade && $question_number) {
            return $this->show($grade, $question_number);
        } else {
            return view('test');
        }   

       
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($grade, $question_number)
    { 
        $grade = (int) $grade;
        $question_number = (int) $question_number;
        $currentQuestion = Test::where('grade', $grade)
                               ->where('question_number', $question_number)
                               ->first();
    
        // Assuming you're finding the next question based on some logic
        $nextQuestion = Test::where('grade', $grade)
                            ->where('question_number', '>', $question_number)
                            ->orderBy('question_number')
                            ->first();
    
        $nextQuestionId = $nextQuestion ? $nextQuestion->question_number : null;

        if(!$currentQuestion) {
            return redirect()->back();
          }

        return view('question', [
            'grade' => $grade,
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
        // Find the test by ID
        $test = Test::findOrFail($id);
        
        // Return the edit view with test data
        return view('question.edit', compact('test'));
    }

        

}
