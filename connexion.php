<?php 



session_start();
include('./script/functions.php');
$errorMessage = "";
if ($_POST) {
    $email = security($_POST["email"]);
    $password = security($_POST["password"]);

    $data = openDB();
    $users = $data["user"];
    foreach ($users as $user) {
        if ($email == $user["email"]) {
            $passOk = password_verify($password, $user["password"]);
            if ($passOk) {
                $_SESSION["user"] = [
                    "name" => $user["name"],
                    "firstName" => $user["firstName"],
                    "email" => $user["email"],
                ];
                header("Locations: /");
            }
        }
    }
    $errorMessage = "l'adresse de courriel ou le mot de passe est incorrect";
}

// session_start ();
// include("./Functions.php");
// $errorMessage="";
// if ($_POST) {

// $email = security ($_POST["email"]);
// $clearPassword=security ($_POST["password"]);

// $data = openDB();
// $users = $data ["user"];
// foreach ($users as $user)

//     if($email == $user["email"])
//      {
//          $passOk = password_verify($password, $user["password"]);
//          if ($passOk){
//              $_SESSION["user"]= [
//                 "email"=> $user["email"],
//                 "name"=> $user["name"],
//                 "firstName"=> $user["firstName"],
//              ];
//              header("Location:/")
//             }
//          }
//      }
// var_dump ( $email, $clearPassword);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/bootstrap.min.css">
    <title>Page vide</title>
</head>
<body>
      
<?php include("./partiel/_navBar.php");?>
  
    <div class="container">
    <h1>Page prise de note</h1>



base de l'inscription:



<h1>Inscription</h1>

        <?php if ($errorMessage) : ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">Attention!</h4>
                <p class="mb-0"><?php echo $errorMessage ?></p>
            </div>
        <?php endif ?>

        <form method="post">
           
            <div class="form-group">
                <label class="col-form-label" for="email">Courriel : </label>
                <input type="email" class="form-control border border-3" name="email">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="password">Mot de passe : </label>
                <input type="password" class="form-control border border-3" name="password">
            </div>
            <input class="btn btn-primary mb-4 mt-3" type="submit" value="Se Connecter">
        </form>
        </div>
    <script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>