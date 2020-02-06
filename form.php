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
            <form action="/add.php" method="get">
                Name: <br>
                <input type="text" name="name" value="" placeholder="eg: Toothless">
                <br><br>
                Rider: <br>
                <input type="text" name="rider" value="" placeholder="eg: Hiccup">
                <br><br>
                Colour: <br>
                <input type="text" name="colour" value="" placeholder="eg: Blue">
                <br><br>
                Attack: <br>
                <input type="text" name="attack" value=""placeholder="eg: 15">
                <br><br>
                Speed: <br>
                <input type="text" name="speed" value="" placeholder="eg: 25">
                <br><br>
                Firepower: <br>
                <input type="text" name="firepower" value="" placeholder="eg: 35">
                <br><br>
                <input type="submit" value="Add Dragon">
            </form>
    </div>

<!--    <h2>Back to the dragons!</h2>-->

</body>
</html>



<!--</section>-->
<!--<div class="dragonButton">-->
<!--    <button>Add a Dragon >></button>-->
<!--</div>-->
