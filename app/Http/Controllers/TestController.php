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
        //give me the question by number_id
        $test = Test::find('number_id');
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
    public function show($id)
    {
        $test = Test::findOrFail($id);

        return view('tests.show', compact('test'));
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
    public function update(Request $request, $id)
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

        $test = Test::findOrFail($id);
        $test->update($request->all());

        return redirect()->route('tests.index')
            ->with('success', 'Test updated successfully.');
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
}
