<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function index() {
        $questions = Question::all();
        return view('quiz', compact('questions'));
    }
}
