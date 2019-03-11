<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 9-1-2019
 * Time: 14:10
 */
$mysqli = new mysqli(  'localhost' ,  'root' ,  'root' ,  'nielsie_db') or die ('Error connecting.');

if ($mysqli->errno) {
    echo 'Error number: ' . $mysqli->errno . '<br>';
}
