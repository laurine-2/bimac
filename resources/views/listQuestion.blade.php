<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body>

<form  method="POST" action="{{ route('quiz', ['sub_category' => $subCategory]) }}">
    @csrf
@foreach($listQuestion as $question)
        <div class="choc-data">
            <p class="explanation">{{ $question["description"] }}</p>
            <div>
                <label><input type="checkbox" name="checkboxes[]" value="ok"> OK</label>
                <label><input type="checkbox" name="checkboxes[]" value="nok"> NOK</label>
                <label><input type="checkbox" name="checkboxes[]" value="need_renforcement"> Need Renforcement</label>
                <label><input type="checkbox" name="checkboxes[]" value="need_documentation"> Need Documentation</label>
            </div>
        </div>
    @endforeach

    <button type="button" onclick="validateCheckboxes()">Valider</button>
</form>

<script>
function validateCheckboxes() {
    // Récupérer toutes les cases à cocher
    var checkboxes = document.querySelectorAll('input[name^="checkboxes["]:checked');

    // Limiter la sélection à deux cases par question
    var questionIds = [];
    for (var i = 0; i < checkboxes.length; i++) {
        var checkbox = checkboxes[i];
        var questionId = checkbox.name.match(/\[(\d+)\]/)[1];

        if (questionIds.includes(questionId)) {
            // Désélectionner la case cochée supplémentaire
            checkbox.checked = false;
        } else {
            questionIds.push(questionId);
        }
    }

    // Soumettre le formulaire
    document.getElementById('checkboxForm').submit();
}
</script>

</body>
</html>