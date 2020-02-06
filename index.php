<?php

require_once "dbconnect.php";
require_once "functions.php";

$db = db();
$dragons = getAllDragons($db);
$dragonHTML = displayDragon($dragons);


?>


<!DOCTYPE html>
<html lang="en-gb">

<head>
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width">
    <title>Dragon's Collection</title>
</head>

<body>
        <div class="header">
            <h2>Dragon’s Race to the Edge Characters</h2>
        </div>

        <section class="dragonContainer">

            <?php

            echo $dragonHTML;

            ?>





</body>
</html>
