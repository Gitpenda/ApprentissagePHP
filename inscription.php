<?php 
session_start ();
include("./Functions.php");
$errorMessage="";
if ($_POST) {
$name=security ($_POST["name"]);
$firstName =security ($_POST["firstName"]);
$email =security ($_POST["email"]);
$clearPassword=security ($_POST["password"]);
var_dump ($name, $firstName, $email, $clearPassword);

$hashPassword= password_hash($clearPassword, PASSWORD_ARGON2ID);
$data = readDB();

// foreach($data["user"] )

$user = [
    "email"=> $email,
    "password"=> $hashPassword,
    "name"=> $name,
    "firstName"=> $firstName,
    "role"=> $ROLE_USER,
];

array_push($data["user"],$user);
whriteOnDB($data);
header("Location: /connexion.php");

}



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
                <label class="col-form-label" for="name">Nom : </label>
                <input type="text" class="form-control border border-3" name="name">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="firstName">Prénom : </label>
                <input type="text" class="form-control border border-3" name="firstName">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="email">Courriel : </label>
                <input type="email" class="form-control border border-3" name="email">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="password">Mot de passe : </label>
                <input type="password" class="form-control border border-3" name="password">
            </div>
            <input class="btn btn-primary mb-4 mt-3" type="submit" value="S'inscrire">
        </form>
        </div>
    <script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>