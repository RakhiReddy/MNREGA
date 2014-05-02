<?php 
    require("mconfig.php"); 
    unset($_SESSION['admin']);
    header("Location: mindex.php"); 
    die("Redirecting to: mindex.php");
?>