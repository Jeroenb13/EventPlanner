<?php
session_start();
require('assets/phpFiles/database.php');
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}else{
    $page = "home";
}require('assets/phpFiles/header.php');
        if(file_exists("pages/$page.php"))
        {
            require("assets/pages/$page.php");
        }else{
            echo "<img class='images-responsive center-block' src='assets/images/404.png' alt='page not found'>";
        }
require('assets/phpFiles/footer.php');
        ?>
