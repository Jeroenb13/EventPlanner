<?php
unset($_SESSION["loggedin"]);
unset($_SESSION["UserName"]);
unset($_SESSION["CLevel"]);
header("Location: ../index.php");
die;