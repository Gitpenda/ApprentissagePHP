<?php

include("./global.php");

// function secutity pour sécuriser les données
// solution: -->
function security($data): string
{
    $result = trim($data);
    $result = stripslashes($result);
    $result = htmlspecialchars($result);
    return $result;
}
// float, int, string , array, objet, bool, void(rien) -->

function plus(float $value1, float $value2): void
{
    $value1+= 50;
    $result= $value1+ $value2;
    echo "$result";
}

// read the content of a file and return an array from json -->
 
function readDB(): array
{
    $jsonData = file_get_contents(FILEDB);
    if (!$jsonData) {
        $jsonData = "{}";
    }
    $array = json_decode($jsonData, true);
    foreach (DBTABLE as $table) {
        if (!array_key_exists($table, $array)) {
            $array[$table] = [];
        }
    }

    return $array;
}



//   transform an array in json data and whrite it on the file

function whriteOnDB(array $data): int
{
    $jsonTab = json_encode($data);

    $result = file_put_contents(FILEDB, $jsonTab);
    return $result;
} 

function openDB(): array
{
    $data = file_get_contents(DBJSON);
    $array = json_decode($data, true);
    if (!$array) {
        $array = [];
    }
    foreach (DBTABLE as $table) {
        if (!array_key_exists($table, $array)) {
            $array[$table] = [];
        }
    }
    return $array;
}

function writeDB(array $data): bool
{
    $correct = true;
    $jsonData = json_encode($data);
    if (!$jsonData) {
        $correct = false;
    } else {
        $size = file_put_contents(DBJSON, $jsonData);
        if (!$size) {
            $correct = false;
        }
    }
    return $correct;
}
