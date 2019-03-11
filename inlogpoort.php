<?php

/**
 * Created by PhpStorm.
 * User: niels
 * Date: 9-1-2019
 * Time: 15:58
 */

////CHECKEN OF DE GEBRUIKER VERDWAALD IS.
//if (!isset($_POST['submit_login'])) {
//    header("Location: index.html");
//}
//
////CHECKEN OF DE GEBRUIKER ALLES IN HEEFT GEVULD.
//if (empty($_POST['username']) OR empty($_POST['password'])) {
//    echo 'Je bent iets vergeten in te vullen.<br>';
//    echo 'Klik <a href="index.html">hier</a> om het nog eens te proberen.';
//    exit();
//}

$mysqli = new mysqli(  'localhost' ,  'niels' ,  '1234' ,  'nielsje_db') or die ('Error connecting.');

if ($mysqli->connect_errno) {
    exit( 'Error code: ' . $mysqli->connect_errno);
}



if ($mysqli->errno) {
    echo 'Error number: ' . $mysqli->errno . '<br>';
}


$query = "INSERT INTO users VALUES (0,'Henk','is','Oranje','4plus7@gmail.com')";
$result = $mysqli->query($query) or die ('Error inserting data.');

echo 'De data staat in de database!';

//CHECKEN OF DE GEBRUKER BESTAAT EN OF ZIJN WACHTWOORD KLOPT.

