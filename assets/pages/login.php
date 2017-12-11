<?php
$error = '';
$hash = "";
$cLevel = 0;// Variabel om Errors op te slaan.
if (isset($_POST['submit']))
{

    if (empty($_POST['uName']) || empty ($_POST['pWord']))
    {
        $error = "Gebruikersnaam en wachtwoord ongeldig";
    } else
    {
        $un = $_POST['uName'];
        $pw = $_POST['uName'] . $_POST['pWord'];

        // Gebruikerscode en ww pakken

        $stmt = $db->prepare("SELECT 'cLevel' + 'pWord' FROM gebruiker WHERE uName = '{$un}';");

        while($row = $stmt -> fetch())
        {
            $cLevel = $row['cLevel'];
            $hash = $row['pWord'];
        }

        if(password_verify($pw, $hash))
        {
            $_SESSION['UserName'] = $un;
            $_SESSION['CLevel'] = $cLevel;
            $hash = "";
            $pw = "";
            echo "password valid";

        }
    }

}
if(password_verify("hoi", $hash)){
    echo "<p>pass valid</p>";}
else{"<p>Piet</p>";}
?>

<!--
Inhoud:
    - Login form
        - Username
        - Pass
        - Submit
        - Terug -> home (?page=home)
-->
<div id="container">
    <div id="upperbar"></div>

    <h1>Event Planner</h1>
    <h2>Login</h2>


    <form id="loginForm" action="#" method="post">

        <div><input class="inputField" type="text" name="uName" placeholder="Gebruikersnaam"><i class="icon-user"></i></div>

        <div><input class="inputField" type="password" name="pWord" placeholder="Wachtwoord"><i class="icon-lock"></i></div>

        <input class="button buttonSubmit" type="submit" name="submit" value="Inloggen">
    </form>

    <div class="spacer"></div>
    <a class="wwVergetenLink" href="?page=wachtwoordVergeten">Wachtwoord vergeten?</a>
