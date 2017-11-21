<?php
session_start();
require('assets/phpFiles/database.php');
if(isset($_GET['page']))
{
    $page = $_GET['page'];
    if(!file_exists("assets/pages/$page.php")){
        $page = "404";
    }
}else{
    $page = "home";
}
require('assets/phpFiles/header.php');
require("assets/pages/$page.php");

require('assets/phpFiles/footer.php');
        ?>
