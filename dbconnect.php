<?php

/**
 * Connection to db
 *
 * @return PDO the db connection
 */
function db(): PDO {
    $db = new PDO('mysql:host=db; dbname=matt_collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

