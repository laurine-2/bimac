<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    //
    public function index()
{
    $questions = Question::all();
    return view('quiz', compact('questions'));
}

public function submit(Request $request)
{
    // Logique pour évaluer les réponses
}
}
