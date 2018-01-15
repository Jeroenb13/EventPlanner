<?php
session_start();
echo $_SESSION["loggedin"];
if(!$_SESSION["loggedin"] || !isset($_SESSION["loggedin"])){

    header("Location: ../index.php");
    die;
}else{
    require("assets/phpFiles/database.php");
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        if(!file_exists("assets/pages/$page.php")){
            $page = "404";
        }
    }else{
        $page = "overzicht";
    }
    require('assets/phpFiles/header.php');
    require("assets/pages/$page.php");
    require('assets/phpFiles/footer.php');
}
?>
