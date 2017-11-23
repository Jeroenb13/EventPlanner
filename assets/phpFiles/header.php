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
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,400" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/scripts/main.js"></script>

    </head>

    <!-- TODO: remove overlay after testing -->
    <form id="testoverlay" method="get" action="">
        <select name="page" onchange="this.form.submit()">
            <option value="home" <?php if($page == "home"){echo "selected";}?>>Home</option>
            <option value="login" <?php if($page == "login"){echo "selected";}?>>Login</option>
            <option value="form" <?php if($page == "form"){echo "selected";}?>>Form</option>
            <option value="map" <?php if($page == "map"){echo "selected";}?>>Kaart</option>
            <option value="404" <?php if($page == "404"){echo "selected";}?>>Page not found</option>
        </select>
    </form>

    <body>
