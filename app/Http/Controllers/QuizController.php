<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuizController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('can:isAdmin')->only(['submit']);
    }
    public function index()
{
    $questions = Question::all();
    return view('quiz', compact('questions'));
}

public function submit(Request $request)
{
    $userResponses = $request->except('_token');

    foreach ($userResponses as $questionId => $response) {
        $question = Question::find($questionId);

        if ($question) {
            $question->responses()->create(['user_id' => auth()->id(), 'response' => $response]);
        }
    }

    return redirect('/dashboard')->with('success', 'Réponses enregistrées avec succès.'); //cette ligne doit etre modifier !
}
}
