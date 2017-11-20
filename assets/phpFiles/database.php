<?php
$dsn = "mysql:dbname=eventplanner;host=localhost;port=3306;charset=UTF8";
$username="aryocon_inf2j";
$password="geefbier";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}
?>
