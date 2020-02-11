<?php
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location:../index.php');
exit;
}

?>

<!DOCTYPE html>
<html lang="en-gb">

<head>
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width">
    <title>Add a Dragon</title>
</head>

<body>

    <div class="header">
        <h2>Add a Dragon</h2>
    </div>

    <div class="addDragonContainer">
            <form method="POST" action="add.php">
                Name: <br>
                <input type="text" name="name" value="" placeholder="eg: Toothless" required>
                <br><br>
                Rider: <br>
                <input type="text" name="rider" value="" placeholder="eg: Hiccup" required>
                <br><br>
                Colour: <br>
                <input type="text" name="colour" value="" placeholder="eg: Blue" required>
                <br><br>
                Attack: <br>
                <input type="text" name="attack" value=""placeholder="eg: 15" required>
                <br><br>
                Speed: <br>
                <input type="text" name="speed" value="" placeholder="eg: 25" required>
                <br><br>
                Firepower: <br>
                <input type="text" name="firepower" value="" placeholder="eg: 35" required>
                <br><br>
                <input type="submit" value="Add Dragon to Collection">
            </form>
    </div>

</body>
</html>


