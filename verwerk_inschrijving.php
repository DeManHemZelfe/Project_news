<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 10-1-2019
 * Time: 13:03
 */

$voornaam = $_POST['voornaam'];
$tsv = $_POST['tsv'];
$achternaam= $_POST['achternaam'];
$mail = $_POST['mail'];


//1. CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect(  'localhost' ,  'niels' ,  '1234' ,  'nielsje_db') or die ('Error connecting.');

//2. OPDRACHT (QUERY) SCHRIJVEN VOOR DATABASE
$query = "INSERT INTO users VALUES (0,'$voornaam','$tsv','$achternaam','$mail')";

//3. QUERY UITVOEREN
$result = mysqli_query( $dbc, $query) or die ('Error inserting data.');
//VERBINDING VERBREKEN
mysqli_close($dbc);

//BEVESTIG DAT JE IN DE DATABASE ZIT

if ($result) {

    echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
    echo $voornaam . '<br>';
    echo $tsv . '<br>';
    echo $achternaam . '<br>';
    echo $mail . '<br>';

}   else {
    echo 'Sorry er iets mis gegaan. Probeer het opnieuw.';
}