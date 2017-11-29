<?php
$serverName = $_SERVER['SERVER_NAME'];
if($serverName == "inf2j.aryoco.nl") {
    $dsn = "mysql:dbname=aryocon_inf2j;host=localhost;port=3306;charset=UTF8";
    $username="aryocon_inf2j";
    $password="geefbier";
}else if($serverName == "eventplanner.joeymariah.me") {
    $dsn = "mysql:dbname=joeynlxj_Eventplanner;host=localhost;port=3306;charset=UTF8";
    $username="joeynlxj_Eventplanner";
    $password="dinges22";
}else {
    $dsn = "mysql:dbname=aryocon_inf2j;host=localhost;port=3306;charset=UTF8";
    $username="root";
    $password="";
}


try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}
?>
