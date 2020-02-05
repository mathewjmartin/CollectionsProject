<?php

function getAllDragons($db) {
    $query = $db->prepare("SELECT `id`, `name`, `rider`, `attack`, `speed`, `firepower`, `images`
    FROM `dragons`;");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}



?>