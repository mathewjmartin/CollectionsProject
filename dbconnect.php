<?php

function db() {
    $db = new PDO('mysql:host=db; dbname=matt_collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

