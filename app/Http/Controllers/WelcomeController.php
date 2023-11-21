<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Question;

class WelcomeController extends Controller
{

    public function index()
{

    // Utilisez la méthode distinct pour obtenir des valeurs distinctes de la colonne sub_category
    $distinctSubCategories = Question::distinct()->pluck('sub_category');

    // Retournez les résultats à la vue ou effectuez d'autres opérations nécessaires
    return view('welcome')->with('distinctSubCategories', $distinctSubCategories);
}
}
