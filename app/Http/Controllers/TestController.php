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
            'question' => 'required',
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
        $test = Test::findOrFail($id);
        return view('tests.edit', compact('test'));
    }

        

}
