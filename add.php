<?php

//if no data go back to index.php
if(!isset($_POST['name'])) {
    header('index.php');
}
//statement to say if user clicks 'add dragon' button in form, then run the insert data function to add to db
if (isset($_POST["add"])) {
    $name = $_POST['name'];
    $rider = $_POST['rider'];
    $colour = $_POST['colour'];
    $attack = $_POST['attack'];
    $speed = $_POST['speed'];
    $firepower = $_POST['firepower'];
    //call the insert data function, pass in the user inputs and pdo connection
    insertData($name, $rider, $colour, $attack, $speed, $firepower);
}