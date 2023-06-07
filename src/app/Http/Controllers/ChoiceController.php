<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $choices = Choice::where('question_id', $id)->get();
        $question_id = $id;
        return view('admin.choices.index', compact('choices', 'question_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $question_id = $id;
        return view('admin.choices.create', compact('question_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        for($i=0; $i < count($request->input('choices')); $i++) {
            $choice = new Choice;
            $choice->name = $request->input('choices')[$i];
            $choice->question_id = $id;
            $choice->valid = $request->input('correctChoice') == $i + 1 ? 1 : 0;
            $choice->save();
        }

        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($choice, $id)
    {
        //

        $choices = Choice::where('question_id', $choice)->get();
        $selected_choice = Choice::find($id);

        return view('admin.choices.edit', compact('selected_choice', 'choices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $choice, $id)
    {
        //
        $selected_choice = Choice::find($id);

        $selected_choice->name = $request->input('choice');

        //DBに保存
        $selected_choice->save();

        //処理が終わったらmember/indexにリダイレクト
        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
