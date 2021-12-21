<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/bootstrap.min.css">
    <title>Algo</title>
</head>
<body>
      
<?php include("./partiel/_navBar.php");?>
  
    <div class="container">


    <h1>Algo sur les tableaux</h1>

        <p>il faudrait faire un tableau avec toutes les factures de Mr Jacques Dupond</p>


        <pre>
<?php

$data = [
    [
        'id' => 17,
        'name' => "Darme",
        'firstName' => "Jean",
        'adress' => "36 quai des orfevres 75000 Paris",
        'date' => "2018-12-01 11:03:15",
        'price' => 23089,
    ],
    [
        'id' => 19,
        'name' => "Dupond",
        'firstName' => "Jacques",
        'adress' => "1 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 13999,
    ],
    [
        'id' => 27,
        'name' => "James",
        'firstName' => "Idriss",
        'adress' => "183 place Emile Zola 88100 Epinal",
        'date' => "2018-12-01 11:03:15",
        'price' => 8745,
    ],
    [
        'id' => 30,
        'name' => "Petit",
        'firstName' => "Pierre",
        'adress' => "22 rue du Stanislas 57000 Nancy",
        'date' => "2018-12-01 11:03:15",
        'price' => 6429,
    ],
    [
        'id' => 31,
        'name' => "Dupond",
        'firstName' => "Jacques",
        'adress' => "47 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 18745,
    ],
    [
        'id' => 35,
        'name' => "Martin",
        'firstName' => "Emeline",
        'adress' => "27 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 5599,
    ],
    [
        'id' => 39,
        'name' => "Le Clown",
        'firstName' => "Bozo",
        'adress' => "2 rue du cirque 29100 Brest",
        'date' => "2018-12-01 11:03:15",
        'price' => 8725,
    ],
    [
        'id' => 40,
        'name' => "Etarivé",
        'firstName' => "Zorro",
        'adress' => "45 rue de californie 62810 Beaudricourt",
        'date' => "2018-12-01 11:03:15",
        'price' => 11218,
    ],
    [
        'id' => 46,
        'name' => "De Saint Exupérie",
        'firstName' => "Antoine",
        'adress' => "2 rue de la poste 62210 Avion",
        'date' => "2018-12-01 11:03:15",
        'price' => 12529,
    ],
    [
        'id' => 49,
        'name' => "Dupond",
        'firstName' => "Jacques",
        'adress' => "1 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 72560,
    ],
    [
        'id' => 56,
        'name' => "Bridou",
        'firstName' => "Justin",
        'adress' => "37 rue des cochons 64440 Auriac",
        'date' => "2018-12-01 11:03:15",
        'price' => 2499,
    ],
    [
        'id' => 57,
        'name' => "Tarcoustic",
        'firstName' => "Guy",
        'adress' => "102 rue des musiciens 69000 Lyon",
        'date' => "2018-12-01 11:03:15",
        'price' => 24076,
    ],
    [
        'id' => 59,
        'name' => "Dumas",
        'firstName' => "Alexandre",
        'adress' => "25 place des écrivains 13000 Malseille",
        'date' => "2018-12-01 11:03:15",
        'price' => 9999,
    ],
    [
        'id' => 61,
        'name' => "Dupond",
        'firstName' => "Jacques",
        'adress' => "1 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 13749,
    ],
    [
        'id' => 66,
        'name' => "Eula",
        'firstName' => "Aude",
        'adress' => "75 rue des esprits 83249 Les Lymbes",
        'date' => "2018-12-01 11:03:15",
        'price' => 7637,
    ],
    [
        'id' => 67,
        'name' => "Skywalker",
        'firstName' => "Anakin",
        'adress' => "4 ruelle des planettes 25500 Lucas",
        'date' => "2018-12-01 11:03:15",
        'price' => 24989,
    ],
    [
        'id' => 73,
        'name' => "Ali",
        'firstName' => "Mohamed",
        'adress' => "32 rue du ring 23500 ",
        'date' => "2018-12-01 11:03:15",
        'price' => 31129,
    ],
    [
        'id' => 77,
        'name' => "Ammar",
        'firstName' => "Oussama",
        'adress' => "1 Frederick's place London England",
        'date' => "2018-12-01 11:03:15",
        'price' => 41045,
    ],
    [
        'id' => 79,
        'name' => "Idriss",
        'firstName' => "Aberkane",
        'adress' => "23 rue des neurones 91426 Bretty",
        'date' => "2018-12-01 11:03:15",
        'price' => 8725,
    ],
    [
        'id' => 82,
        'name' => "Dupond",
        'firstName' => "Jacques",
        'adress' => "1 rue du paradis 68500 Mulhouse",
        'date' => "2018-12-01 11:03:15",
        'price' => 12777,
    ],
    [
        'id' => 89,
        'name' => "Fiand",
        'firstName' => "Leny",
        'adress' => "1 rue stalline 68500 Mulhouse",
        'date' => "2021-04-29 09:31:15",
        'price' => 12559,
    ],
];

?>
</pre>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>first name</th>
                    <th>adress</th>
                    <th>date</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $invoice) : ?>
                    <tr>
                        <th><?= $invoice["id"] ?></th>
                        <th><?= $invoice["name"] ?></th>
                        <th><?= $invoice["firstName"] ?></th>
                        <th><?= $invoice["adress"] ?></th>
                        <th><?= $invoice["date"] ?></th>
                        <th><?= $invoice["price"] / 100 ?> €</th>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <?php
        $specificIncoices = [];
        // TO DO
// stratégie1:
// boucler dans le tableau et sortir les factures qui correspondent et les placer dans l'autre tableau
//    stratègie2:
//    boucler dans le tableau et retirer les factures qui ne correspondent pas.
   foreach ($data as $invoice) {
       if ( "Dupond"==$invoice ["name"] && "Jacques"==$invoice ["firstName"]){
           array_push($specificIncoices,$invoice);
       }
   }
   ?>
        <br>
        <br>
        <br>
        <p>voici les factures de M.Jacques Dupond</p>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>first name</th>
                    <th>adress</th>
                    <th>date</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specificIncoices as $invoice) : ?>
                    <tr>
                        <th><?= $invoice["id"] ?></th>
                        <th><?= $invoice["name"] ?></th>
                        <th><?= $invoice["firstName"] ?></th>
                        <th><?= $invoice["adress"] ?></th>
                        <th><?= $invoice["date"] ?></th>
                        <th><?= $invoice["price"] / 100 ?> €</th>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


</div>
    <script src="/JS/bootstrap.bundle.min.js"></script>
</body>
</html>