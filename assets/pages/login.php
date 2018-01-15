<?php
/*$stmt2 = $db->prepare("INSERT INTO UserData (`UserName`, `Password`, `Type`)VALUES (?, ?, ?)");
$pass = "dinges22";
$un = "Fepadro";
$prehash = $un . $pass;
$hash = password_hash($prehash, PASSWORD_BCRYPT);
$stmt2 -> execute(array($un, $hash, 2));
echo "test";
$stmt2 -> closeCursor();*/
$error = '';
$hash = "";
$cLevel = 0;// Variabel om Errors op te slaan.
$check = true;
if(isset($_POST['submit']))
{

    if(empty($_POST['uName']) || empty ($_POST['pWord']))
    {
        $error = "Gebruikersnaam en/of wachtwoord ongeldig";
    } else
    {
        $un = $_POST['uName'];
        $pw = $_POST['uName'] . $_POST['pWord'];

        // Gebruikerscode en ww pakken

        $stmt = $db->prepare("SELECT * FROM UserData WHERE UserName = ?;");
        $stmt -> execute(array($un));
        while($row = $stmt -> fetch())
        {
            $cLevel = $row['Type'];
            $hash = $row['Password'];
            $check = password_verify($pw, $hash);
        }
        echo $cLevel . "<br>";
        echo $hash . "<br>";
        echo $pw . "<br>";
        echo $check . "<br>";
        echo strlen($hash). "<br>";
        if($check)
        {
            $_SESSION['UserName'] = $un;
            $_SESSION['CLevel'] = $cLevel;
            $_SESSION["loggedin"] = true;
            $hash = "";
            $pw = "";
            $error = "password valid";
            header("Location: dashboard/index.php");
            die;

        }else{
            $error = "Gebruikersnaam en/of wachtwoord ongeldig";
        }
    }

}
echo $error;
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

        <div><input class="inputField" type="text" name="uName" placeholder="Gebruikersnaam"><i class="icons-inputfields icon-user"></i></div>

        <div><input class="inputField" type="password" name="pWord" placeholder="Wachtwoord"><i class="icons-inputfields icon-lock"></i></div>

        <input class="button buttonSubmit" type="submit" name="submit" value="Inloggen">
    </form>

    <div class="spacer"></div>
    <a class="wwVergetenLink" href="?page=wachtwoordVergeten">Wachtwoord vergeten?</a>
<?php
$stmt ->closeCursor();
?>