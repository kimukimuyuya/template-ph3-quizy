<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    // 問題タイトルの表示
    {
        //
        $questions = Question::all();
        return view('admin.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    // 新規作成ページ
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // 作成するボタンを押したときにレコードが追加される
    {
        //
        if($file = $request->file('image')) {
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img',$fileName);
        }
        $question = new Question;

        $question->content = $request->input('content');
        // $question->image = $request->file('image');
        $question->image = $fileName;
        // $file_name = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/' . 'img',$file_name);
        $question->supplement = $request->input('supplement');

        $question->save();
        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    // 問題タイトルに紐づいているものを見るときに使う（今回ならチョイス）
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    // 編集画面に飛ぶ
    {
        //
        $questions = Question::find($id);

        return view('admin.edit', compact('questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    // 実際に編集する、更新する
    {
        //
        $questions = Question::find($id);
        // if($file = $request->file('image')) {
        //     $fileName = $file->getClientOriginalName();
        //     $file->storeAs('public/img',$fileName);
        // }

        // $file = $request->file('image');
        // $fileName = $file->getClientOriginalName();
        // $file->storeAs('public/img' ,$fileName);

        $questions->content = $request->input('content');
        // $questions->image = $fileName;
        $questions->supplement = $request->input('supplement');

        //DBに保存
        $questions->save();

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
    // 消される
    {
        //
        $questions=Question::find($id);

        $questions->delete();
    
        return redirect('questions');
    }
}
