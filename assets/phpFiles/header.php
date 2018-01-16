<!DOCTYPE html>
<!--
Inhoud:
    - Banner?
    - Navigatiebalk
-->
<html>
    <head>
        <title>Eventplanner - <?php echo $page;?></title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/style/css/styleMain.css">
        <link rel="stylesheet" href="assets/style/css/fontello.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/scripts/main.js"></script>
        <script src="https://use.fontawesome.com/af3e5536fc.js"></script>

        <!--Scripts voor de kaart-->
        <link rel="stylesheet" href="assets/style/css/ol.css">
    </head>

    <body>
    <?php
    if($page != "login" && $page != "home" && $page != "404"){
    echo "
      <div id=\"container-plus\">
        <div id=\"upperbar\"></div>

        <!-- Navigation -->
        <div id=\"nav\">
            <ul>
                <li><a onclick=\"showNav()\">☰</a></li>";
                if($_SESSION["loggedin"]) {
                    echo "<li><a id=\"loginDropdown-click\" href=\"#\" onclick=\"showLoginInfo()\"><i class=\"icon-user nav-user-icon\"></i></a>
                    <div id=\"loginDropdown\"> <p id=\"IngelogdNaam\">" . $_SESSION["UserName"] . "</p>
                        <a class=\"login-dropdown-a\">Profiel<i class=\"icon-pencil\"></i></a> <a class=\"login-dropdown-a\">Uitloggen<i class=\"icon-logout\"></i></a> </div>
                </li>";
                }
                echo "<li><a href=\"?page=kaart\">Kaart</a></li>
                <li><a href=\"?page=onderdelen\">Onderdelen</a></li>
                <li><a href=\"?page=basisgegevens\">Basisgegevens</a></li>
            </ul>
        </div>
        <div id=\"nav-overlay\">
            <ul>
                <li><a href=\"?page=basisgegevens\">Basisgegevens</a></li>
                <div class=\"nav-divider\"></div>
                <li><a href=\"?page=onderdelen\">Onderdelen</a></li>
                <div class=\"nav-divider\"></div>
                <li><a href=\"?page=kaart\">Kaart</a></li>
                <div class=\"nav-divider\"></div>";
                if($_SESSION["loggedin"]) {
                    echo "<li class=\"nav-overlay-user-li\">
                    <i class=\"icon-user nav-overlay-icon-user\"></i><p id=\"nav-overlay-ingelogdNaam\">" . $_SESSION["UserName"] . "</p>
                    <a class=\"nav-overlay-login-a\">Profiel<i class=\"icon-pencil\"></i></a>
                    <a class=\"nav-overlay-login-a\">Uitloggen<i class=\"icon-logout\"></i></a>
                </li>";
                }
            echo "</ul>
        </div>";
    }else{
        echo "
  <div id=\"container\">
    <div id=\"upperbar\"></div>";
    }

    ?>
