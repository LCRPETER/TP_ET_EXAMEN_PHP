<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2> Exercice 1</h2>
    <form>
        <fieldset>
            <legend>A propos de css</legend>
            <label for="Qcss">Savez vous ce que veut dire CSS ?: </label><br>
            <input type="radio" name="Qcss" id="Qss">
            <input type="radio" name="Qcss" id="Qss">
            <label for="Rcss">non. Si oui, les utilisez vous plutôt : </label>
            <select name="Rcss" id="Rcss">
                <option value="toujours">toujours</option>
                <option value="jamais">jamais</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Vos conrdonnées</legend>
            <label for="email">Votre email : </label>
            <input type="email" name="email" id="email" placeholder="email">
            <label for="tArea">Vos commentaires : </label><br>
            <textarea name="tArea" id="tArea" cols="20" rows="5"></textarea>
        </fieldset>
        <input type="submit" value="Envoyer">
        <input type="reset" value="Annuler">
    </form>
    <h2> Exercice 2</h2>
    <div class="container">
        <div></div>
    </div>
</body>

</html>