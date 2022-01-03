
<?php
session_start();
include('./script/functions.php');
$errorMessage = "";
if ($_POST) {
    $title = security($_POST["title"]);

    $theFileOnServer = $_FILES["path"]["tmp_name"];
    $autorizedMime = ["image/gif", "image/jpeg", "image/png"];
    $testMime = mime_content_type($theFileOnServer);
    // test about mime
    if (!in_array($testMime, $autorizedMime)) {
        $errorMessage = "le fichier n'est pas reconnu comme une image";
    }
    // test about upload reality
    if (!is_uploaded_file($theFileOnServer)) {
        $errorMessage = "il y a eu un problème lors de l'upload du fichier";
    }
    // test about size
    $fileSize = fileSize($theFileOnServer);
    if (99000 < $fileSize) {
        $errorMessage = "le fichier est trop volumineux";
    }

    if (!$errorMessage) {
        $originalFileName = basename($_FILES["path"]["name"]);
        $fileExt = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $fileBase = pathinfo($originalFileName,  PATHINFO_FILENAME);
        $tempCleanedName = preg_replace("/\s/", "-", $fileBase);
        $fileName = $tempCleanedName . uniqid() . '.' . $fileExt;
        $destination = UPLOADFOLDER . $fileName;

        $isSuccess = move_uploaded_file($theFileOnServer, $destination);
        if ($isSuccess) {
            $data = openDB();
            $upload = [
                "title" => $title,
                "path" => $fileName,
            ];
            array_push($data["upload"], $upload);
            writeDB($data);
        } else {
            $errorMessage = "il y a eu un problème lors de l'enregistrement du fichier";
        }
    }
    $files = $data["upload"];
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

    <title>upload d'une image</title>
</head>

<body>
    <?php include("./partial/_navBar.php"); ?>
    <div class="container">
        <h1>upload d'une image</h1>

        <?php if ($errorMessage) : ?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">Attention!</h4>
                <p class="mb-0"><?php echo $errorMessage ?></p>
            </div>
        <?php endif ?>

        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-form-label" for="name">Titre : </label>
                <input type="text" class="form-control border border-3" name="title" value="<?php echo $titre; ?>">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="path">votre fichier : </label>
                <input type="file" class="form-control border border-3" name="path">
            </div>
            <input class="btn btn-primary mb-4 mt-3" type="submit" value="Modifier">
        </form>

        <?php if ($files) : ?>
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">titre</th>
                        <th scope="col">image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($files as $upload) : ?>
                        <tr>
                            <td><?= $upload["title"] ?></td>
                            <td><img src="/image/upload/<?= $upload["path"] ?>" alt="photo de <?= $upload["title"] ?>"></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>