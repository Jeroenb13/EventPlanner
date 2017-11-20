<?php
session_start();
require ('src/phpFiles/database.php');
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}else{
    $page = "home";
}
?>

<?php   require ('src/style/header.php');?>
<div id="container">
    <div id="content">
        <?php
        if(file_exists("pages/$page.php"))
        {
            require ("src/pages/$page.php");
        }else{
            echo "<img class='img-responsive center-block' src='src/img/404.png' alt='page not found'>";
        }
        ?>
    </div></div>
<?php require ('src/style/footer.php');?>
