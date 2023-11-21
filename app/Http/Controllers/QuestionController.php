<?php

namespace App\Http\Controllers;
use \App\models\Question;    

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function awnserQuestion($sub_category){
        $listQuestion = Question::where("sub_category","=", $sub_category)->get();
        return view("listQuestion")->with("listQuestion", $listQuestion);
    }
    
}
