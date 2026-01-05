<?php

require_once "./Traits/Rating.php";

require_once "./Models/Movie.php";

require_once "./Models/Genre.php";

require_once "./db.php";

// vedo i risultati
var_dump($Inception);
echo $Inception->getAverageRating();
var_dump($LaVitaEBella);
echo $LaVitaEBella->getAverageRating();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classe Movie</title>
</head>

<body>

    <h1>PHP Classe Movie</h1>

</body>

</html>