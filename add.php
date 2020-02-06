<?php

require_once "dbconnect.php";
require_once "functions.php";

//if no data go back to index.php
if(!isset($_POST['name'])) {
    header('Location: index.php');
} else {
    $name = $_POST['name'];
    $rider = $_POST['rider'];
    $colour = $_POST['colour'];
    $attack = $_POST['attack'];
    $speed = $_POST['speed'];
    $firepower = $_POST['firepower'];

    //create database connection
    $db = db();

    //call the insert data function, pass in the user inputs and pdo connection
    insertData($name, $rider, $colour, $attack, $speed, $firepower, $db);

    //boot back to homepage when a cheese is input
    header('Location: index.php');
}