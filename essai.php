
    <?php
function readDB(string $file): array
{
    $jsonData = file_get_contents("./data/essai");

    $data = json_decode($jsonData, true);
    return $data;
}

function whriteOnDB(array $data): int
{
    $jsonTab = json_encode($data);

    $result = file_put_contents("./data/essai", $jsonTab);
    return $result;
}

$tab = [
    "data1" => "data to save",
    "data2" => "next data",
    "dataOther" => "something else",
];

whriteOnDB($tab);

echo "OK";
**
dans test.php, il y a deux choses:
le include du fichier function.php et
$tab = readDB();



$tab["Jeff"] = "vous salue";


$size = whriteOnDB($tab);

echo "taille du fichier écrit: $size octets"; 
dans le fichier des function.php:
include('./script/globals.php');

/
 * read the content of a file and return an array from json
 */
function readDB(): array
{
    $jsonData = file_get_contents(FILETOTEST);
    if (!$jsonData) {
        $jsonData = "{}";
    }
    $data = json_decode($jsonData, true);
    return $data;
}


/
 * transform an array in json data and whrite it on the file
 */
function whriteOnDB(array $data): int
{
    $jsonTab = json_encode($data);

    $result = file_put_contents(FILETOTEST, $jsonTab);
    return $result;
}
**et dans dans le fichier des globals:
define("FILETOTEST", './data/essai');
?>