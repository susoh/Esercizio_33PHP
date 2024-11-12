<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cf = $_GET["cf"];
    $eta = $_GET["eta"];
    if (!isset($_SESSION["registrazioni"])) {
        $_SESSION["registrazioni"] = array($cf => $eta);
    }else {
        $_SESSION["registrazioni"] = array_merge($_SESSION["registrazioni"], array($cf => $eta));
    }
    ?>
    <a href="risultati.php">Vai ai risultati</a>
    <a href="form.html">Vai al form</a>
</body>
</html>