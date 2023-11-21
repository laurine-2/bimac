<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    //
    public function saveResults(Request $request)
{
    // Valider et sauvegarder les résultats dans la base de données
    $this->validate($request, [
        'checkboxes' => 'required|array|min:1|max:2', // Assurez-vous que deux cases sont sélectionnées
        'checkboxes.*' => 'in:ok,nok,need_renforcement,need_documentation',
    ]);

    // Enregistrez les résultats dans la base de données
    $result = new Result;
    $result->user_id = auth()->user()->id; // Vous devrez ajuster cela en fonction de votre système d'authentification
    $result->results = $request->input('checkboxes');
    $result->save();

    // Redirigez l'administrateur ou effectuez d'autres actions
    return redirect()->route('admin.dashboard')->with('success', 'Résultats sauvegardés avec succès.');
}
}
