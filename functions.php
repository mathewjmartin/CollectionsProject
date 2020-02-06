<?php

/**
 * Retrieves dragons from DB
 *
 * @param PDO $db connection
 *
 * @return array dragons from db
 */
function getAllDragons(PDO $db): array {
    $query = $db->prepare("SELECT `id`, `name`, `colour`, `rider`, `attack`, `speed`, `firepower`, `images`
    FROM `dragons`;");
    $query->execute();
    return $query->fetchAll();
}

/**
 * Creates HTML from dragon data
 *
 * @param array $dragons assoc array of dragons
 *
 * @return string generated html
 */
function displayDragon(array $dragons): string {
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
}

function insertData($name, $rider, $colour, $attack, $speed, $firepower, $db) {
    $query = $db->prepare("INSERT INTO `dragons`(`name`, `rider`, `colour`, `attack`, `speed`, `firepower`)
                            VALUES (:name, :rider, :colour, :attack, :speed, :firepower)");
    $query->bindParam(':name', $name);
    $query->bindParam(':rider', $rider);
    $query->bindParam(':colour', $colour);
    $query->bindParam(':attack', $attack);
    $query->bindParam(':speed', $speed);
    $query->bindParam(':firepower', $firepower);
    return $query->execute();
}
