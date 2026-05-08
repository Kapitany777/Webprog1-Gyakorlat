<?php
include "includes/dbconfig.php";

function dbConnect()
{
    $dbh = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    return $dbh;
}
