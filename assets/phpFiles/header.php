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
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/scripts/main.js"></script>

    </head>

    <!-- TODO: remove overlay after testing -->
    <form id="testoverlay" method="get" action="">
        <select name="page" onchange="this.form.submit()">
            <option value="home" <?php if($page == "home"){echo "selected";}?>>Home</option>
            <option value="login" <?php if($page == "login"){echo "selected";}?>>Login</option>
            <option value="formulier" <?php if($page == "formulier"){echo "selected";}?>>Form</option>
            <option value="kaart" <?php if($page == "kaart"){echo "selected";}?>>Kaart</option>
            <option value="onderdelen" <?php if($page == "onderdelen"){echo "selected";}?>>Onderdelen</option>
            <option value="404" <?php if($page == "404"){echo "selected";}?>>Page not found</option>
        </select>
    </form>

    <body>
