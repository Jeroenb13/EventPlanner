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

    <h1>EventPlanner</h1>
    <p>Log in om uw objecten aan te passen</p>


    <form action="#" method="post">


        <label>Gebruikersnaam</label>

        <p> <input type="text" name="uName"></p>

        <label>wachtwoord</label>:
        <p>    <input type="password" name="pWord"></p>

        <input type="submit" name="submit" value="inloggen">
    </form>
