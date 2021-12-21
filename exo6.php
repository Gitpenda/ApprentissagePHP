<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/bootstrap.min.css">
    <title>Exercice6</title>
</head>
<body>
<?php include("./partiel/_navBar.php");?>

<div class="container">
<h1>Excercie 6</h1>
<?php
 
  $code = hexdec("223a");
  $result= "tous les gagnants ont joué, essayez";
  $response = "";

  if (!empty($_POST)) {
    if ($_POST["try"]) {
    $try = strip_tags ($_POST["try"]);
    }   

    if (isset($try)) {
    
    if ($code == $try) {
        $result = "bien joué, le code 
        est $try";
    
} else {
    $result = "non, le code n'est pas $try";
    
 }
}

 }

//  TO DO  with while
$i= 0;
$continue = true;
$noInfinitLoop = 10000;

while ($continue){
if ($i== $code) {
    $continue = false;
    $response = strval($i);   
} else {
    $i++;
}
if ($noInfinitLoop < 0) {
    $continue = false;
    $response = "boucle infini";
    $noInfinitLoop --;
}

    
}
?>
<p>Le code à trouver est compris entre 0 et 10000, tentez votre chance ou faites en sorte que la machine vous aide à trouver le bon code</p>

<?php if ($response) : ?>
    <p>la réponse est : <?php echo $response; ?></p>
<?php endif?>
<form method="post">
    <div class="form-group">
        <label class="col-form-label" for="try">Trouvez le code</label>
        <input type="text" class="form-control border border-3" name="try">     
   </div>
   
    <a href="/exo6.php" class="btn btn-primary mt-3 mb-3">ANNULER</a>
    <input type="submit" class= " btn btn-primary mt-3 mb-3 " value="ESSAYER">
    </form>
 
   <p><?php echo $result; ?></p>
</div>
<script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>