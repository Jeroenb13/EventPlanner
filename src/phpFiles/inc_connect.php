<?php

//connectie voor de Database
$DBName = "eventplanner";
$DBConnect = mysqli_connect("localhost", "root");
if ($DBConnect === False)
{
    echo "<p>Unable to connect to the database server</p>";
    echo "<p>Error Code" . mysqli_errno() . ": " . mysqli_error() . "</p>";
} else
{
    $db = mysqli_select_db($DBConnect, $DBName);
    if ($db === FALSE)
    {
        echo "<p>unable to connect to the database server</p>";
        echo "<p>error code" . mysqli_errno() . ": " . mysqli_error() . "</p>";
        mysqli_close($DBConnect);
        $DBConnect = FALSE;
    } else
    {

    }
}
?>
