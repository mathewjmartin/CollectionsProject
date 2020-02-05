<?php

function getAllDragons($db) {
    $query = $db->prepare("SELECT `id`, `name`, `colour`, `rider`, `attack`, `speed`, `firepower`, `images`
    FROM `dragons`;");
    $query->execute();
    return $query->fetchAll();
}

function displayDragon($dragons) {
    $output = "";
    foreach($dragons as $dragon) {
        $output .= "<div class='outerContainer'>
                        <div class='dragonBox'>
                            <img class='dragonImage' src='" . $dragon['images'] . "'>
                            <h3 class='dragonName'>" . $dragon['name'] . "</h3>
                            <ul>
                                <li>Rider: " . $dragon['rider'] . "</li>
                                <li>Colour: " . $dragon['colour'] . "</li>
                                <li>Attack: " . $dragon['attack'] . "</li>
                                <li>Speed: " . $dragon['speed'] . "</li>
                                <li>Firepower: " . $dragon['firepower'] . "</li>
                            </ul>
                        </div>
                    </div>";
    }
    return $output;

    var_dump($dragon);


}


