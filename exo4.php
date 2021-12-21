<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/bootstrap.min.css">
    <title>Exercice4</title>
</head>
<body>
      
<?php include("./partiel/_navBar.php");?>
  
    <div class="container">
    <h1>Exercice 4</h1>
        <h5>1- créer une <a href="https://www.latoilescoute.net/table-de-vigenere" target="_blank">table de vigenère</a></h5>
        <?php
        $alphabetString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $alphabet = str_split($alphabetString);
        $alphaDouble = array_merge($alphabet, $alphabet);
        $sizeAlpha = count($alphabet);

        for ($i = 0; $i < $sizeAlpha; $i++) {
            for ($j = 0; $j < $sizeAlpha; $j++) {
                $caract = $alphaDouble[$i];
                $column = $alphaDouble[$j];
                $vigenere[$caract][$column] = $alphaDouble[$i + $j];
            }
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php foreach ($vigenere["A"] as $letter) : ?>
                        <th scope="col"><?= $letter ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vigenere as $key => $row) : ?>
                    <tr>
                        <th scope="row"><?= $key ?></th>
                        <?php foreach ($row as $letter) : ?>
                            <td><?= $letter ?></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
        <?php
        $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
        $key = "BACKEND";

        $messageTab = str_split($message);
        $keyTab = str_split($key);
        $keySize = count($keyTab);
        $counterPositionInKey = 0;

        foreach ($messageTab as $letterToEncode) {
            $positionInTheKeyTab = $counterPositionInKey % $keySize;
            $keyForEncode = $keyTab[$positionInTheKeyTab];
            if ($letterToEncode == " ") {
                $encodedMessage[] = " ";
            }
            if ($letterToEncode != " ") {
                $encodedMessage[] = $vigenere[$letterToEncode][$keyForEncode];
            }
            $counterPositionInKey++;
        }
        $cryptedMessage = implode($encodedMessage);
        ?>
        <p>le message est: <?php echo $message; ?></p>
        <p>la clé est: <?php echo $key ?></p>
        <p>le résultat est: <?php echo $cryptedMessage; ?></p>
        <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
        <?php
        $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
        $keys4decode = "VIGENERE";
        $encodedMessageTab = str_split($encodedMessage);
        $keyTab = str_split($keys4decode);
        $keySize = count($keyTab);
        $counterPositionInKey = 0;
        foreach ($encodedMessageTab as $pointer => $letterToDecode) {
            $positionInTheKeyTab = $counterPositionInKey % $keySize;
            $keyFordecode = $keyTab[$positionInTheKeyTab];
            if ($letterToDecode == " ") {
                $decodedMessageTab[] = " ";
                // $result = "il y a un espace";
            }
            if ($letterToDecode != " ") {
                for ($i = 0; $i < $sizeAlpha; $i++) {
                    $letterToTest = $alphabet[$i];
                    //echo "on teste $letterToTest <br>";
                    $test = $vigenere[$letterToTest][$keyFordecode];
                    //echo "la lettre du message encodé est $letterToDecode et on pointe vers $test<br>";
                    if ($letterToDecode == $vigenere[$letterToTest][$keyFordecode]) {
                        $decodedMessageTab[] = $letterToTest;
                        $result = "resultat trouvé: $letterToTest <br>";
                    }
                }
            }
            // var_dump($positionInTheKeyTab, $letterToDecode, $keyFordecode, $result, $decodedMessage);
            // echo "===========================";
            // echo "fin de cette étape<br>";
            $counterPositionInKey++;
        }





        $decodedMessage = implode($decodedMessageTab);
        ?>
        <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
        <p>la clé est: <?php echo $key4decode ?></p>
        <p>le résultat est: <?php echo $decodedMessage; ?></p>
   
</div>
    <script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>