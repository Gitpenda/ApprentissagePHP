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
   
    // TO DO

   $alphabetString= "ABCDEFGHIJKLMNOPQRST";
   $alphabet= str_split($alphabetString);  
//  var_dump ($alphabetString);
     $alphabet = str_split ($alphabetString);
      $sizeAlphabet= array_merge($alphabet,$alphabet);
      $sizeAlphabet= count($alphabet);
$shortAlpha =["A","B","C", "D","A","B","C", "D"];


for ($i= 0; $i<4; $i++) {
    for ($j = 0; $j <4; $j++) {
        $caract = $shortDouble [$i];
        $column = $shortDouble [$j];
        $vigenere[$caract][$column]= $shortAlpha[$i+$j];
    }
}

<table class="table">
  <thead >
    <tr>
      <th scope="col">#</th>
      <?php foreach ($vigenere [A] as $letter) : ?>
      <th scope="col"><?= $letter ?></th>
      <?php endforeach ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td scope="rox">#</td>
      <?php foreach ($row as $letter) : ?>
      <td><?= $letter ?></td>
      <?php endforeach ?>
    <tr>
    <?php endforeach ?>
     
  </tbody>
</table>






    //   $row1 = ["A","B","C", "D"];
    //   $row2 = ["B","C", "D","A",];
    //   $row3 = ["C", "D","A","B",];
    //   $row4 = [ "D","A","B","C",];
    //   $vigenere=[
    //     $row1 ,
    //     $row2 ,
    //     $row3 ,
    //     $row4,
    //   ]




    // TO DO
    ?>
    <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
    <?php
    $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
    $key = "BACKEND";

    $messageTab = str_split($message);
    $keyTab = str_split ()




    // TO DO
    $cryptedMessage = $message;
    /**
    * astuce pour la rotation de la clé BACKEND
    * 14 / 7 -> 2
    * 15 / 7 -> 2 reste 1
    * pour récuperer le "reste 1" il faut faire un modulo
    * 15 % 7 -> 1
    * 176 % 7 -> 1 (25 x 7 et reste 1)
    */
    ?>
    <p>le message est: <?php echo $message; ?></p>
    <p>la clé est: <?php echo $key ?></p>
    <p>le résultat est: <?php echo $cryptedMessage; ?></p>
    <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
    <?php
    $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
    $key4decode = "VIGENERE";
    // TO DO
    $decodedMessage = $encodedMessage;
    ?>
    <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
    <p>la clé est: <?php echo $key4decode ?></p>
    <p>le résultat est: <?php echo $decodedMessage; ?></p>
</div>
    <script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>