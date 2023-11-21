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

<form id="checkboxForm">
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
    var checkboxes = document.querySelectorAll('input[name="checkboxes[]"]:checked');

    // Limiter la sélection à deux cases
    if (checkboxes.length > 2) {
        alert("Vous ne pouvez sélectionner que deux propositions.");
        // Désélectionner la dernière case cochée
        checkboxes[checkboxes.length - 2].checked = false;
    } else {
        // Soumettre le formulaire ou effectuer d'autres actions si nécessaire
        document.getElementById('checkboxForm').submit();
    }
}
</script>

</body>
</html>