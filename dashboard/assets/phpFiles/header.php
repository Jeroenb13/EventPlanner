<!DOCTYPE html>
<!--
Inhoud:
    - Banner?
    - Navigatiebalk

CL:
    - 0 = Hulpdienst
    - 1 = Gebruiker
    - 2 = Gemeente
-->
<?php
$_SESSION["cl"] = 2;
if(!isset($_SESSION["cl"])){

}else{
    echo "<html>"
    .       "<head>"
        .       "<title>Eventplanner - " . ucfirst($page) . "</title>"
        // Stylesheets
        .       "<link rel=\"stylesheet\" href=\"assets/style/css/styleMain.css\">"
        .       "<link rel=\"stylesheet\" href=\"assets/style/css/fontello.css\">"
        //Fonts
        .       "<link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,400,600\" rel=\"stylesheet\">"
        //Scripts
        .       "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>"
        .       "<script src=\"assets/scripts/main.js\"></script>"
        .       "<script src=\"https://use.fontawesome.com/af3e5536fc.js\"></script>"
        .   "</head>";
    echo    "<body>"
        .       "<div id=\"container-plus\">"
        .           "<div id=\"upperbar\"></div>"
        //Navigation
        .           "<div id=\"nav\">"
        .               "<ul>"
        .                   "<li><a onclick=\"showNav()\">☰</a></li>"
        .                   "<li><a href=\"?page=profiel\">Profiel</a></li>";
        if($_SESSION["cl"] == 2) {
            echo            "<li><a href=\"?page=accounts\">Accounts</a></li>";
        }
        echo                "<li><a href=\"?page=overzicht\">Overzicht</a></li>"
        .               "</ul>"
        .           "</div>"
        .           "<div id=\"nav-overlay\">"
        .               "<ul>"
        .                   "<li><a href=\"?page=profiel\">Profiel</a></li>"
        .                   "<div class=\"nav-divider\"></div>";
        if($_SESSION["cl"] == 2) {
            echo            "<li><a href=\"?page=accounts\">Accounts</a></li>"
                .           "<div class=\"nav-divider\"></div>";
        }
        echo                "<li><a href=\"?page=overzicht\">Overzicht</a></li>"
        .               "</ul>"
        .           "</div>"
        .           "<div id=\"page-container\">"
        .           "<h1>Dashboard</h1>"
        .           "<h2>" . ucfirst($page) . "</h2>";

}

?>
