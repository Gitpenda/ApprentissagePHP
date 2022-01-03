
<?php

if (!empty($_POST)) {
    if ($_POST["text"]) {
        $text = strip_tags($_POST["text"]);
    }
    if ($_POST["key"]) {
        $key = strip_tags($_POST["key"]);
    }
    if ($_POST["action"]) {
        $encodedMessage = strip_tags($_POST["action"]);
    }
}


switch ($action) {
    case "encodeVigenere":
        $result = encodeVigenere($text, $key);
        break;
    case "decodageVigenere":
        $result = decodeVigenere($text, $key);
        break;
    default:
        $result = "";
   }


?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Exercie7</title>
</head>

<body>
 
    <div class="container">
        <h3>Exercice7</h3>
        <p>programme de codage et décodage suivant divers protocole de cryptage</p>


       


        <form method="POST">
            <div class="form-group">
                <label for="message">Le Texte</label>
                <textarea name="message" class="form-control border border-3" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="key">La clé</label>
                <input type="text" class="form-control border border-3" name="key" >
            </div>
            <div class="form-group">
                <label for="method">Action à effectuer</label>
                <select class="form-select border border-3" name="action">
<option value="">Choisissez l'action</option>
<option value="encodeVigenere">encodage par Vigenère</option>
<option value="">décodage par vigenère</option>

                </select>
            
                
               
            </div>
            <a href="/exo7.php" class="btn btn-primary mt-3 mb-3">ANNULER</a>
            <input type="submit" class="btn btn-primary mt-3 mb-3" value="ENVOYER">
        </form>

        
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>